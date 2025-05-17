<?php

use App\Http\Controllers\AdminController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
// Route::get('/portfolio', function () {
//     return view('portfolio');
// });
Route::get('/contact', function () {
    return view('contact');
});

// Admin routes
Route::get('/admin_login', function () {
    return view('admin/admin_login');
});
Route::post('/admin_login', [AdminController::class, 'admin_login']);

Route::get('/admin_events', function () {
    $events = Event::orderBy('created_at', 'desc')->paginate(5);
    // dd($events);
    return view(
        'admin/events',
        [
            'events' => $events
        ]
    );
});
Route::post('/admin_events', [AdminController::class, 'admin_events']);
Route::get('/search_events', [AdminController::class, 'search_events']);
Route::get('/update_and_resend_event/{id}', function($id){
    $event = Event::where('id', $id)->first();
    // dd($event);
    return view('admin/update_and_resend_event', [
        'event' => $event
    ]);
});
Route::put('/update_and_resend_event/{id}', [AdminController::class, 'update_and_resend_event']);
Route::delete('/delete_event/{id}', [AdminController::class, 'delete_event']);