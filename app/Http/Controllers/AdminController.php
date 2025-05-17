<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionConfirmationMail;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function members_subscription(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:members,email',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => "You've already subscribe once.",
        ]);
        $email = $request->email;
        Member::create([
            'email' => $email,
        ]);
        try {
            Mail::send('emails.subscription_confirmation', ['email' => $email], function ($message) use ($email) {
                $message->to($email)
                    ->subject('Ejanla Entertainment Subscription Confirmation');
            });
            return response()->json(['message' => 'Thanks for subscribing!'], 200);
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while sending the email.' . $e->getMessage()], 500);
        }
    }

    public function admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => "required|string|min:8"
        ]);
        // dd([
        //     $request->email,
        //     $request->password,
        // ]);
        $admin = User::where('email', $request->email)->first();
        if (!$admin) {
            return redirect()->back()->withErrors(['email' => 'Admin account not found.']);
        }
        if (!password_verify($request->password, $admin->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid credentials.']);
        }
        return redirect(url('admin_events'))->with('success', 'Login successful.');
    }

    public function admin_events(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'caption' => 'nullable|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'flyer' => 'nullable|image|max:2048',
        ]);

        // Handle flyer upload if present
        $flyerPath = null;
        if ($request->hasFile('flyer')) {
            $flyerPath = $request->file('flyer')->store('flyers', 'public');
        }

        // Create event
        $event = Event::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'flyer' => $flyerPath,
        ]);

        // Send email notification to all members
        // $members = Member::pluck('email');
        // Send email notifications in chunks
        Member::chunk(100, function ($members) use ($event) {
            foreach ($members as $member) {
                try {
                    Mail::send('emails.event_notification', ['event' => $event], function ($message) use ($member, $event) {
                        $message->to($member->email)
                            ->subject('New Event: ' . $event->title);
                    });
                } catch (\Exception $e) {
                    Log::error('Failed to send event email to ' . $member->email . ': ' . $e->getMessage());
                }
            }
        });

        return redirect()->back()->with('success', 'Event created and notifications sent.');
    }

    public function search_events(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255',
        ], [
            'search.required' => "Can't be empty..."
        ]);
        $search = $request->input('search');
        $events = Event::where('title', 'like', '%' . $search . '%')
            ->orWhere('location', 'like', '%' . $search . '%')
            ->paginate(5);
        return view('admin.events', compact('events', 'search'));
    }

    public function update_and_resend_event(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'caption' => 'nullable|string',
            'location' => 'sometimes|required|string|max:255',
            'date' => 'sometimes|required|date',
            'time' => 'sometimes|required',
            'flyer' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'caption', 'location', 'date', 'time']);

        // Handle flyer upload if present
        if ($request->hasFile('flyer')) {
            // Delete old flyer if exists
            if ($event->flyer) {
                Storage::disk('public')->delete($event->flyer);
            }
            $data['flyer'] = $request->file('flyer')->store('flyers', 'public');
        }

        $event->update($data);

        // Resend email notification to all members about the update
        Member::chunk(100, function ($members) use ($event) {
            foreach ($members as $member) {
                try {
                    Mail::send('emails.event_notification', ['event' => $event], function ($message) use ($member, $event) {
                        $message->to($member->email)
                            ->subject('Updated Event: ' . $event->title);
                    });
                } catch (\Exception $e) {
                    Log::error('Failed to send updated event email to ' . $member->email . ': ' . $e->getMessage());
                }
            }
        });

        return redirect('/admin_events')->with('success', 'Event updated and notifications resent.');
    }
}
