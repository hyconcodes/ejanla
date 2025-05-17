<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Cancellation - Ejanla Entertainment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #ff4d4d;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .email-body {
            padding: 20px;
        }

        .email-body p {
            line-height: 1.6;
            margin: 0 0 15px;
            color: #333;
        }

        .email-body a {
            display: inline-block;
            background-color: #4826fa;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .email-footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://res.cloudinary.com/dykcp6qdm/image/upload/v1747236416/ejanla/site_white_logo.png" alt="Ejanla Entertainment Logo" style="width: 100px; height: 50px; border-radius: 10%;">
        </div>

        <div class="email-header">
            <h1>Event Cancellation Notice</h1>
        </div>

        <div class="email-body">
            <p>Dear Valued Subscriber,</p>
            <p>We regret to inform you that the event titled <strong>"{{ $eventTitle }}"</strong> has been canceled. We sincerely apologize for any inconvenience this may cause.</p>
            <p>At Ejanla Entertainment, we are committed to providing the best experiences, and we will ensure to inform you about future events that match your expectations.</p>
            <p>Thank you for your understanding and continued support.</p>
            <a href="{{ url('/') }}" target="_blank">Visit Our Website</a>
        </div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Ejanla Entertainment and Food Service LLC. All rights reserved.</p>
            <p>Located in Dallas, Texas, U.S.A.</p>
        </div>
    </div>
</body>

</html>
