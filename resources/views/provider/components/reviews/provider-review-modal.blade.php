<form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <!--! ================================================================ !-->
    <!--! [Start] Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="reviewProviderOffcanvas">
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
                <!-- Reyting / Ball -->
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
                            <input type="hidden" name="burget_score" id="burget_score" required>
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
                        <input type="hidden" name="quality_score" id="quality_score" required>
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

                <!-- Tavsif -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">За описанием:</label>
                        <textarea name="behind_collaboration" class="form-control" rows="3" placeholder="Введите ваш отзыв" required></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Во время описания:</label>
                        <textarea name="during_collaboration" class="form-control" rows="3" placeholder="Введите ваш отзыв" required></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Описание улучшений:</label>
                        <textarea name="improvements" class="form-control" rows="3" placeholder="Введите ваш отзыв" required></textarea>
                    </div>
                </div>

                <!-- Sharh manbasi -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Рекомендуете ли вы?</label><br>

                        <input type="radio" id="recommend_yes" name="recommend" value="yes" >
                        <label for="recommend_yes">Да</label><br>

                        <input type="radio" id="recommend_no" name="recommend" value="no" >
                        <label for="recommend_no">Нет</label><br>
                    </div>
                </div>

                <!-- Ismlar -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Полное имя:</label>
                        <input type="text" name="full_name" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Электронная почта:</label>
                        <input type="email" name="email" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Должность:</label>
                        <input type="text" name="job_title" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">название компании:</label>
                        <input type="text" name="company_name" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">отрасль компании:</label>
                        <input type="text" name="company_industry" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">размер компании:</label>
                        <input type="text" name="company_size" class="form-control" placeholder="" required>
                    </div>
                </div>

                <!-- Xizmat kategoriyasi -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label for="service_category_id" class="form-label">Категория услуги:</label>
                        <select name="service_category_id" id="service_category_id" class="form-control" required>
                            <option value="">Выберите</option>
                            @foreach($service_categories as $category)
                                <option value="{{ $category->id }}" {{ isset($review) && $review->service_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name_ru }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Yashirin Provayder ID -->
                <input type="hidden" name="provider_id" value="{{ auth()->user()->id }}">

                <!-- Yuborish tugmasi -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary">Создать комментарий</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
    // Initialize star reviews for each section
    handleStarReview('budget-review', 'burget_score');
    handleStarReview('quality-review', 'quality_score');
    handleStarReview('schedule-review', 'schedule_score');
    handleStarReview('colloboration-review', 'colloboration_score');
});

function handleStarReview(reviewId, inputId) {
    const reviewElement = document.getElementById(reviewId);
    const buttons = reviewElement.querySelectorAll('.star-button');
    const input = document.getElementById(inputId);

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            // Remove 'active' class from all buttons in this review
            buttons.forEach((btn) => {
                btn.classList.remove('active');
            });

            // Add 'active' class to the clicked button and all before it
            buttons.forEach((btn, i) => {
                if (i <= index) {
                    btn.classList.add('active');
                }
            });

            // Store the score in the hidden input field
            input.value = index + 1; // Save the star rating to the hidden input
        });
    });
}

        </script>


    </div>

    <!--! ================================================================ !-->
    <!--! [End] Review Provider Offcanvas !-->
    <!--! ================================================================ !-->

</form>
