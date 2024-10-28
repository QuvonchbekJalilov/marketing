<?php
$languages = App\Models\Language::all();
// Assuming $reviews is passed to the view
?>

@foreach($reviews as $review)
<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')
    <style>
        .star-button.active i {
            color: yellow; /* Color for active stars */
        }

    </style>
    <!--! ================================================================ !-->
    <!--! [Start] Edit Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="editReviewProviderOffcanvas{{ $review->id }}">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <!-- Rating / Scoro -->
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <div class="star-review" id="budget-review">
                            <label class="form-label">Бюджетный балл:</label>
                            <div class="star-buttons">
                                <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
                            </div>
                            <input type="hidden" name="burget_score" id="burget_score" value="{{ old('burget_score', $review->burget_score ?? '') }}" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="star-review" id="quality-review">
                        <label class="form-label">Качественный балл:</label>
                        <div class="star-buttons">
                            <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
                        </div>
                        <input type="hidden" name="quality_score" value="{{ $review->quality_score }}" id="quality_score" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="star-review" id="schedule-review">
                        <label class="form-label">График балл:</label>
                        <div class="star-buttons">
                            <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
                        </div>
                        <input type="hidden" name="schedule_score" id="schedule_score" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="star-review" id="colloboration-review">
                        <label class="form-label"> Балл за сотрудничество:</label>
                        <div class="star-buttons">
                            <button class="star-button" type="button" data-index="1"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="2"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="3"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="4"><i class="fa-solid fa-star"></i></button>
                            <button class="star-button" type="button" data-index="5"><i class="fa-solid fa-star"></i></button>
                        </div>
                        <input type="hidden" name="colloboration_score" id="colloboration_score" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">За описанием:</label>
                        <textarea name="behind_collaboration" class="form-control" rows="3" placeholder="Введите ваш отзыв" required>{{ $review->behind_collaboration }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Во время описания:</label>
                        <textarea name="during_collaboration" class="form-control" rows="3" placeholder="Введите ваш отзыв" required>{{ $review->during_collaboration }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Описание улучшений:</label>
                        <textarea name="improvements" class="form-control" rows="3" placeholder="Введите ваш отзыв" required>{{ $review->improvements }}</textarea>
                    </div>
                </div>

                <!-- Review Source -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Рекомендуете ли вы?</label><br>

                        <input type="radio" id="recommend_yes" name="recommend" value="yes" {{ $review->recommend == 'yes' ? 'checked' : '' }}>
                        <label for="recommend_yes">Да</label><br>

                        <input type="radio" id="recommend_no" name="recommend" value="no" {{ $review->recommend == 'no' ? 'checked' : '' }}>
                        <label for="recommend_no">Нет</label><br>
                    </div>
                </div>

                <!-- names -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Полное имя:</label>
                        <input type="text" name="full_name" class="form-control" placeholder=""  value="{{ $review->full_name }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Электронная почта:</label>
                        <input type="text" name="email" class="form-control" placeholder=""  value="{{ $review->email }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Должность:</label>
                        <input type="text" name="job_title" class="form-control" placeholder=""  value="{{ $review->job_title }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">название компании:</label>
                        <input type="text" name="company_name" class="form-control" placeholder=""  value="{{ $review->company_name }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">отрасль компании:</label>
                        <input type="text" name="company_industry" class="form-control" placeholder=""  value="{{ $review->company_industry }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">размер компании:</label>
                        <input type="text" name="company_size" class="form-control" placeholder=""  value="{{ $review->company_size }}" required>
                    </div>
                </div>

                <!-- service category -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label for="service_category_id" class="form-label">Категория услуги:</label>
                        <select name="service_category_id" id="service_category_id" class="form-control" required>
                            <option value="">Выберите</option>
                            @foreach($service_categories as $category)
                                <option value="{{ $category->id }}" {{ isset($review) && $review->service_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Status -->


                <!-- Hidden Provider ID -->
                <input type="hidden" name="provider_id" value="{{ $review->provider_id }}">

                <!-- Submit Button -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary">Обновить отзыв</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', () => {--}}
{{--            // Har bir forma uchun yulduzli reyting funksiyasini o'rnating--}}
{{--            handleStarReview('budget-review', 'burget_score');--}}
{{--            handleStarReview('quality-review', 'quality_score');--}}
{{--            handleStarReview('schedule-review', 'schedule_score');--}}
{{--            handleStarReview('colloboration-review', 'colloboration_score');--}}
{{--        });--}}

{{--        function handleStarReview(reviewId, inputId) {--}}
{{--            const reviewElement = document.getElementById(reviewId);--}}
{{--            const buttons = reviewElement.querySelectorAll('.star-button');--}}
{{--            const input = document.getElementById(inputId);--}}

{{--            buttons.forEach((button, index) => {--}}
{{--                button.addEventListener('click', () => {--}}
{{--                    buttons.forEach((btn, i) => {--}}
{{--                        btn.classList.toggle('active', i <= index);--}}
{{--                    });--}}
{{--                    input.value = index + 1; // Yulduzlar ballini yashirin inputga saqlash--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}

{{--        $(document).ready(function () {--}}
{{--            $('.star-button').on('click', function () {--}}
{{--                var index = $(this).data('index');--}}
{{--                $('.star-button').removeClass('active'); // Barcha tugmalarning aktiv holatini olib tashlash--}}
{{--                for (var i = 1; i <= index; i++) {--}}
{{--                    $('.star-button[data-index="' + i + '"]').addClass('active'); // Bosilgan tugmalardan oldin barcha tugmalarni faollashtirish--}}
{{--                }--}}
{{--                $('#quality_score').val(index); // Yakuniy reytingni berish--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const score = parseInt(document.getElementById('burget_score').value, 5); // Get the score

            // Function to handle star review
            function setStarReview(starButtons, score) {
                starButtons.forEach((button, index) => {
                    if (index < score) {
                        button.classList.add('active'); // Add active class to the button if its index is less than score
                    }
                    // Attach click event to the button
                    button.addEventListener('click', () => {
                        starButtons.forEach((btn) => btn.classList.remove('active')); // Remove active class from all buttons
                        button.classList.add('active'); // Add active class to the clicked button
                        document.getElementById('burget_score').value = index + 1; // Save the score to the hidden input
                        for (let i = 0; i < index; i++) {
                            starButtons[i].classList.add('active'); // Activate all previous stars
                        }
                    });
                });
            }

            const starButtons = document.querySelectorAll('#budget-review .star-button');
            setStarReview(starButtons, score); // Set the star review based on the saved score
        });

    </script>
    <!--! ================================================================ !-->
    <!--! [End] Edit Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
</form>
@endforeach
