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

            .star-button {
                background: none;
                border: none;
                cursor: pointer;
                color: #ccc; /* Yulduzlar uchun boshlang'ich rang */
                font-size: 24px; /* Yulduzlar o'lchami */
            }

            .star-button.selected,
            .star-button:hover,
            .star-button:hover ~ .star-button {
                color: #ffcc00; /* Tanlangan yoki ustiga kelingan yulduzlar rang */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h1>Спасибо за ваш отзыв!</h1>
    </div>

    <!-- Content Section -->
    <div class="content">
        <h2>Привет, {{ $review->full_name }}!</h2>
        <p>
            Мы ценим ваш отзыв. Пожалуйста, подтвердите свой отзыв, нажав кнопку ниже:
        </p>

        <div class="review">
            <p><strong>Обзор:</strong> {{ $review->recommend }}</p>
            <p>
                <strong>Качественный балл:</strong>
                <span class="star-review" data-rating="{{ $review->burget_score }}">
        <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
    </span>
                {{ $review->burget_score }} / 5
            </p>

            <p>
                <strong>График балл:</strong>
                <span class="star-review" data-rating="{{ $review->quality_score }}">
        <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
    </span>
                {{ $review->quality_score }} / 5
            </p>

            <p>
                <strong>Балл за сотрудничество:</strong>
                <span class="star-review" data-rating="{{ $review->schedule_score }}">
        <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
    </span>
                {{ $review->schedule_score }} / 5
            </p>

            <p>
                <strong>За описанием:</strong>
                <span class="star-review" data-rating="{{ $review->colloboration_score }}">
        <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
        <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
    </span>
                {{ $review->colloboration_score }} / 5
            </p>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('.star-review').each(function () {
                        var rating = $(this).data('rating');

                        $(this).find('.star-button').each(function () {
                            var index = $(this).data('index');
                            if (index <= rating) {
                                $(this).addClass('selected');
                            }
                        });
                    });
                });
            </script>

        </div>

        <p>
            <a href="{{ route('reviews.confirm', $review->id) }}" class="btn">Confirm Your Review</a>
        </p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Если вы не оставляли этот отзыв, пожалуйста, проигнорируйте это письмо.</p>
        <p>&copy; {{ date('Y') }} Ваша компания. Все права защищены.</p>
    </div>
</div>

</body>
</html>
