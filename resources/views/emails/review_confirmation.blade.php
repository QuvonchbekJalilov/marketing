<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Your Review</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 15px 0;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            font-size: 22px;
            color: #333;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .review {
            background-color: #f9f9f9;
            padding: 10px 15px;
            border-left: 4px solid #4CAF50;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .header h1 {
                font-size: 20px;
            }

            .content h2 {
                font-size: 20px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>Thank You for Your Review!</h1>
        </div>

        <!-- Content Section -->
        <div class="content">
            <h2>Hello, {{ $review->client->name }}!</h2>
            <p>
                We appreciate your feedback. Please confirm your review by clicking the button below:
            </p>

            <div class="review">
                <p><strong>Review:</strong> {{ $review->description }}</p>
                <p><strong>Score:</strong> {{ $review->score }} / 5</p>
            </div>

            <p>
                <a href="{{ route('reviews.confirm', $review->id) }}" class="btn">Confirm Your Review</a>
            </p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>If you didn't leave this review, please ignore this email.</p>
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
