<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejanla Entertainment Subscription</title>
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
            background-color: #4826fa;
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
            <!-- <img src="{{ secure_asset('assets/ejanla/ejanla_logo2.png') }}" alt="Ejanla Entertainment Logo" style="width: 100px; height: auto;"> -->
        </div>

        <div class="email-header">
            <h1>Welcome to Ejanla Entertainments!</h1>
        </div>

        <div class="email-body">
            <p>Dear Valued Subscriber,</p>
            <p>Thank you for subscribing to <strong>Ejanla Entertainment and Food Service LLC</strong>! We’re thrilled to have you on board as part of our growing community.</p>
            <p>Your subscription has been successfully activated with the email:</p>
            <p><strong>{{ $email }}</strong></p>
            <p>As a subscriber, you’ll receive exclusive updates about our upcoming events, mouthwatering grilled fish specials, catering offers, and much more.</p>
            <p>Get ready to experience the vibrant fusion of African cuisine, culture, and entertainment that only Ejanla can offer!</p>
            <a href="{{ url('/') }}" target="_blank">Visit Our Website</a>
        </div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Ejanla Entertainment and Food Service LLC. All rights reserved.</p>
            <p>Located in Dallas, Texas, U.S.A.</p>
        </div>
    </div>
</body>

</html>