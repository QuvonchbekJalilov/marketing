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
                @php
                // Define the review types and their corresponding score names
                $reviews = [
                    'burget' => 'Бюджетный балл',
                    'quality' => 'Качественный балл',
                    'schedule' => 'График балл',
                    'colloboration' => 'Балл за сотрудничество'
                ];
                @endphp
                @foreach ($reviews as $key => $label)
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <div class="star-review" id="{{ $key }}-review">
                            <label class="form-label">{{ $label }}:</label>
                            <div class="star-buttons">
                                @for ($i = 1; $i <= 5; $i++)
                                    <button class="star-button" type="button" data-index="{{ $i }}">
                                        <i class="fa-solid fa-star" style="color: {{ $i <= $review["{$key}_score"] ? '#FFBF00' : 'grey' }}"></i>
                                    </button>
                                @endfor
                            </div>
                            <input type="hidden" name="{{ $key }}_score" id="{{ $key }}_score" value="{{ old("{$key}_score", $review["{$key}_score"] ?? '') }}" required>
                        </div>
                    </div>
                </div>
            @endforeach
            
                
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        // Initialize star ratings for each review category
                        @foreach (array_keys($reviews) as $key)
                            initializeStarReview('{{ $key }}-review', '{{ $key }}_score');
                        @endforeach
                    });
                
                    function initializeStarReview(reviewId, inputId) {
                        const reviewElement = document.getElementById(reviewId);
                        const buttons = reviewElement.querySelectorAll('.star-button');
                        const input = document.getElementById(inputId);
                        const score = parseInt(input.value) || 0; // Get the score
                
                        // Set initial active stars based on saved score
                        buttons.forEach((button, index) => {
                            if (index < score) {
                                button.classList.add('active'); // Add active class if index is less than score
                            }
                
                            // Attach click event to each button
                            button.addEventListener('click', () => {
                                buttons.forEach((btn) => btn.classList.remove('active')); // Remove active class from all buttons
                                button.classList.add('active'); // Add active class to the clicked button
                                input.value = index + 1; // Save the score to the hidden input
                                for (let i = 0; i < index; i++) {
                                    buttons[i].classList.add('active'); // Activate all previous stars
                                }
                            });
                        });
                    }
                </script>
                
                <style>
                    .star-button {
                        background: transparent;
                        border: none;
                        cursor: pointer;
                        color: grey; /* Default star color */
                    }
                    .star-button.active {
                        color: yellow; /* Active star color */
                    }
                </style>
                
            


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

    <!--! ================================================================ !-->
    <!--! [End] Edit Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
</form>
@endforeach
