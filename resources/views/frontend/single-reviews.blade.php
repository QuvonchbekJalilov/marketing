@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')

    <main class="main">
        <section class="section-box box-content-feature box-content-feature-2 pb-0">
            <div class="container">
                <div class="text-center"> <span class="btn btn-bg-brand-4 mb-25"><span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0532 15.1551L12.3032 1.65509C12.2684 1.60707 12.2228 1.56797 12.17 1.54102C12.1172 1.51406 12.0587 1.5 11.9994 1.5C11.9402 1.5 11.8817 1.51406 11.8289 1.54102C11.7761 1.56797 11.7305 1.60707 11.6957 1.65509L1.9457 15.1551C1.91663 15.1955 1.89588 15.2412 1.88466 15.2897C1.87344 15.3381 1.87198 15.3883 1.88035 15.4374C1.88873 15.4864 1.90678 15.5333 1.93345 15.5753C1.96012 15.6173 1.99487 15.6535 2.0357 15.682L11.7857 22.432C11.8485 22.4755 11.923 22.4988 11.9994 22.4988C12.0758 22.4988 12.1504 22.4755 12.2132 22.432L21.9632 15.682C22.004 15.6535 22.0388 15.6173 22.0654 15.5753C22.0921 15.5333 22.1102 15.4864 22.1185 15.4374C22.1269 15.3883 22.1254 15.3381 22.1142 15.2897C22.103 15.2412 22.0823 15.1955 22.0532 15.1551ZM11.9994 15.6445L8.6882 12.9951L11.9994 3.05946L15.3107 12.997L11.9994 15.6445ZM7.94945 12.832L3.22257 14.6676L10.8744 4.08134L7.94945 12.832ZM8.18382 13.5463L11.6244 16.312V21.4157L3.11195 15.5151L8.18382 13.5463ZM12.3744 16.312L15.8169 13.5501L20.9469 15.4738L12.3744 21.4082V16.312ZM16.0494 12.8432L13.1244 4.08134L20.7126 14.5813L16.0494 12.8432Z"
                                    fill=""></path>
                            </svg></span>Reviews</span>

                    <h2 class="mt-15 mb-15">Share the story of your collaboration with DORA</h2>
                    <p class="text-lg neutral-500 mb-25">Sortlist is an independent partner helping marketers to find
                        the best agencies.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="box-of-review">
                <!-- Tugmalar faqat LG ekranlarida ko'rinadi -->
                <div class="menu-with-js d-none d-sm-none d-lg-block">
                    <button class="menu-button active-button" id="rate-your-experience"
                            onclick="showForm('rate-your-experience')">
                        <i class="fa-solid fa-star-half-stroke"></i> Rate your experience
                    </button>
                    <button class="menu-button" id="describe-your-experience"
                            onclick="showForm('describe-your-experience')">
                        <i class="fa-regular fa-newspaper"></i> Describe your experience
                    </button>
                    <button class="menu-button" id="personal-information" onclick="showForm('personal-information')">
                        <i class="fa-regular fa-user"></i> Personal Information
                    </button>
                </div>
                <form class="rate-your-experience active-form">
                    @csrf
                    <div class="texts-top">
                        <h3>Voice your opinion about DORA on Marketing.uz</h3>
                        <p>Review and help others to choose the right agency.</p>
                    </div>
                    <div class="star-reviews-box">
                        <div class="star-review" id="budget-review">
                            <label>Budget *</label>
                            <span>How satisfied are you with DORA's understanding, flexibility, and respect of your budget?</span>
                            <div class="star-buttons">
                                <button class="star-button" type="button" data-index="1"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="2"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="3"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="4"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="5"><i
                                        class="fa-solid fa-star"></i></button>
                            </div>
                            <input type="hidden" name="budget_score" id="budget_score" required>
                        </div>
                        <div class="star-review" id="quality-review">
                            <label>Quality *</label>
                            <span>How satisfied are you with the quality of service?</span>
                            <div class="star-buttons">
                                <button class="star-button" type="button" data-index="1"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="2"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="3"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="4"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="5"><i
                                        class="fa-solid fa-star"></i></button>
                            </div>
                            <input type="hidden" name="quality_score" id="quality_score" required>
                        </div>
                        <div class="star-review" id="schedule-review">
                            <label>Schedule *</label>
                            <span>How satisfied are you with the scheduling and timeliness?</span>
                            <div class="star-buttons">
                                <button class="star-button" type="button" data-index="1"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="2"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="3"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="4"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="5"><i
                                        class="fa-solid fa-star"></i></button>
                            </div>
                            <input type="hidden" name="schedule_score" id="schedule_score" required>
                        </div>
                        <div class="star-review" id="collaboration-review">
                            <label>Collaboration *</label>
                            <span>How satisfied are you with the collaboration and communication?</span>
                            <div class="star-buttons">
                                <button class="star-button" type="button" data-index="1"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="2"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="3"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="4"><i
                                        class="fa-solid fa-star"></i></button>
                                <button class="star-button" type="button" data-index="5"><i
                                        class="fa-solid fa-star"></i></button>
                            </div>
                            <input type="hidden" name="collaboration_score" id="collaboration_score" required>
                        </div>
                    </div>
                </form>
                <form class="describe-your-experience"
                      style="display: none;">
                    @csrf
                    <div class="texts-top">
                        <h3>Tell us about the work delivered.</h3>
                        <p>Review and help others to choose the right agency.</p>
                    </div>
                    <div class="star-reviews-box">
                        <div class="star-review">
                            <label style="margin-bottom: 16px;">What was the objective behind your collaboration?
                                *</label>
                            <textarea class="js-textareaThe" style="height: 100px;"
                                      placeholder="The agency helped to deliver a top-class website that suits our need for a new digital strategy."
                                      id="behind_collaboration" name="behind_collaboration">
                            </textarea>
                        </div>
                        <div class="star-review">
                            <label style="margin-bottom: 16px;">What did you enjoy the most during your collaboration?
                                *</label>
                            <textarea class="js-textareaSelect" id="during_collaboration" name="during_collaboration"
                                      placeholder="Select and describe one or a few things you liked the most about your experience with the agency.">
                            </textarea>
                        </div>
                        <div class="star-review">
                            <label style="margin-bottom: 16px;">Are there any areas for improvements? (optional)</label>
                            <textarea class="js-textareaIf" id="improvements" name="improvements"
                                      placeholder="If any, give the agency some comments on how they can improve specific aspects of their service.">
                            </textarea>
                        </div>
                        <div class="row">
                            <div class="star-review col-sm-12 col-lg-6">
                                <label style="margin-bottom: 16px;">Which service did the agency provide you with?
                                    (optional)</label>
                                <select class="js-select" name="service_sub_category_id" required>
                                    <option value="">Select a service</option>
                                    @foreach($services as $service)
                                            <option value="{{ $service->subCategory->id }}">{{ $service->subCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="star-review col-sm-12 col-lg-6">
                                <label class="mb-3" for="radioRecommend">Would you recommend this agency? *</label>
                                <label class="d-flex align-items-center">
                                    <input type="radio" name="recommend" value="yes" class="me-2 js-yes" required> Yes
                                </label>
                                <label class="d-flex align-items-center">
                                    <input type="radio" name="recommend" value="no" class="me-2 js-no"> No
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="personal-information" style="display: none;">
                    @csrf
                    <div class="texts-top">
                        <h3>Tell us more about you.</h3>
                        <p>We only use this information to confirm your review's authenticity.</p>
                    </div>
                    <div class="row star-reviews-box">
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="fullname">
                                Full Name *</label>
                            <input class="form-control" id="full_name" name="full_name" type="text" placeholder="Name"
                                   style="background-color: #F6F6F5;">
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="fullname">
                                Email *</label>
                            <input class="form-control" id="email" name="email" type="text"
                                   placeholder="email@website.com"
                                   style="background-color: #F6F6F5;">
                        </div>

                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="fullname">
                                Job Title *</label>
                            <input class="form-control" id="job_title" name="job_title" type="text"
                                   placeholder="eg marketing director"
                                   style="background-color: #F6F6F5;">
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="fullname">
                                Company Name *</label>
                            <input class="form-control" id="company_name" name="company_name" type="text"
                                   placeholder="eg Apple Inc."
                                   style="background-color: #F6F6F5;">
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="company_industry">
                                Company industry (optional)
                            </label>
                            <select class="form-control" id="company_industry" name="company_industry"
                                    style="width:50%;">
                                <option value="" disabled selected>Select your industry</option>
                                <option value="Technology">Technology</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Education">Education</option>
                                <option value="Construction">Construction</option>
                                <option value="Food">Food</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="company_industry">
                                Provider (optional)
                            </label>
                            <select class="form-control" id="provider_id" name="provider_id" style="width:50%;">
                                <option value="">Select Provider</option>
                                <option value="{{$provider->id}}">Provider</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="company_size">
                                Company size (optional)
                            </label>
                            <select class="form-control" id="company_size" name="company_size" style="width: 50%;">
                                <option value="" disabled selected>Select company size</option>
                                <option value="1-10">1-10</option>
                                <option value="11-50">11-50</option>
                                <option value="51-200">51-200</option>
                            </select>
                        </div>
                </form>
                <div style="display: flex; align-items: center; gap: 5px;"><input type="checkbox"
                                                                                  style="width: 20px; height: 20px;">
                    <span>I agree to the <a href="#">terms of service</a> and <a href="#">privacy
                                    policy</a>.</span>
                </div>
            </div>

            <div class="bottom-of-box">
                <button class="prev-btn btn btn-black btn-rounded" style="display: none;" onclick="prevForm()">
                    Previous
                </button>
                <button class="next-btn btn btn-brand-4-medium"> Next <i
                        class="fa-solid fa-arrow-right"></i></button>
            </div>
        </section>
    </main>
    <script>
        const buttons = document.querySelectorAll('.menu-button');

        let formData = {};

        document.addEventListener('DOMContentLoaded', () => {
            const reviews = document.querySelectorAll('.star-buttons');

            reviews.forEach(review => {
                const buttons = review.querySelectorAll('.star-button');
                const scoreInput = review.parentElement.querySelector('input[type="hidden"]');

                buttons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        const currentIndex = Array.from(buttons).indexOf(button);

                        buttons.forEach((btn, i) => {
                            if (i <= currentIndex) {
                                btn.classList.add('active');
                            } else {
                                btn.classList.remove('active');
                            }
                        });
                        scoreInput.value = currentIndex + 1;
                        formData[scoreInput.name] = currentIndex + 1;
                    });
                });
            });
        });
        buttons.forEach((button, index) => {
            button.addEventListener('click', function () {
                buttons.forEach(btn => btn.classList.remove('active-button'));
                this.classList.add('active-button');
                showForm(index);
            });
        });

        let currentFormIndex = 0;
        function showForm(formIndex) {
            const forms = document.querySelectorAll('.box-of-review form');
            const nextButton = document.querySelector('.next-btn');
            const prevButton = document.querySelector('.prev-btn');

            forms.forEach(form => form.style.display = 'none');
            buttons.forEach(btn => btn.classList.remove('active-button'));

            currentFormIndex = formIndex;
            forms[currentFormIndex].style.display = 'block';
            buttons[currentFormIndex].classList.add('active-button');

            prevButton.style.display = currentFormIndex > 0 ? 'inline-block' : 'none';

            nextButton.textContent = currentFormIndex === forms.length - 1 ? 'Submit' : 'Next';
            loadFormData();
        }
        function loadFormData() {
            const currentForm = document.querySelectorAll('.box-of-review form')[currentFormIndex];
            const inputs = currentForm.querySelectorAll('input, textarea,select');

            inputs.forEach(input => {
                const name = input.name;
                if (formData[name]) {
                    if (input.type === 'hidden') {
                        input.value = formData[name];
                        const buttons = input.closest('.star-review').querySelectorAll('.star-button');
                        buttons.forEach((btn, index) => {
                            if (index < formData[name]) {
                                btn.classList.add('active');
                            } else {
                                btn.classList.remove('active');
                            }
                        });
                    }
                    else if (input.type === 'checkbox' || input.type === 'radio')
                    {
                        if (input.checked) {
                            formData[name] = input.value;
                        }
                    }
                    else {
                        input.value = formData[name];
                    }
                }
                input.addEventListener('input', () => {
                    formData[name] = input.value;
                });
            });
        }
        document.querySelector('.next-btn').addEventListener('click', () => {
            const forms = document.querySelectorAll('.box-of-review form');
            const currentForm = forms[currentFormIndex];

            if (currentForm.checkValidity()) {
                console.log("Hozirgi forma saqlangan ma'lumotlar:", formData);

                if (currentFormIndex < forms.length - 1) {
                    currentFormIndex++;
                    showForm(currentFormIndex);
                } else {
                    alert("Oxirgi formaga o'tildi va yuborilmoqda!");
                    submitFormData(formData);
                }
            } else {
                alert("Iltimos, barcha maydonlarni to'ldiring.");
            }
        });
        function submitFormData(data) {
            console.log("Yuborilayotgan ma'lumotlar:", JSON.stringify(data, null, 2));
            fetch('{{ route('save.review') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        return response.json().then(errData => {
                            throw new Error(errData.message || 'Ma\'lumotni saqlashda xatolik yuz berdi.');
                        });
                    }
                })
                .then(data => {
                    alert("Ma'lumotlar muvaffaqiyatli saqlandi!");
                    console.log(data);
                    // Foydalanuvchini single providers sahifasiga yo'naltirish
                    const providerId = {{ $provider->id }}; // PHP dan id ni oling
                    window.location.href = '/single-providers/' + providerId; // kerakli sahifa yo'lini kiriting
                })
                .catch(error => {
                    console.error("Xatolik:", error.message);
                    alert("Xatolik yuz berdi: " + error.message);
                });
        }

        document.querySelector('.prev-btn').addEventListener('click', () => {
            if (currentFormIndex > 0) {
                currentFormIndex--;
                showForm(currentFormIndex);
            }
        });
        document.addEventListener('DOMContentLoaded', () => {
            const reviews = document.querySelectorAll('.star-buttons');
            reviews.forEach(review => {
                const buttons = review.querySelectorAll('.star-button');
                buttons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        const currentIndex = Array.from(buttons).indexOf(button);
                        buttons.forEach((btn, i) => {
                            if (i > currentIndex) {
                                btn.classList.remove('active');
                            } else {
                                btn.classList.add('active');
                            }
                        });
                    });
                });
            });
        });
        document.addEventListener('DOMContentLoaded', () => {
            const textareas = document.querySelectorAll('textarea');

            textareas.forEach(textarea => {
                textarea.value = '';
            });
        });
        showForm(currentFormIndex);
        loadFormData();
    </script>
@endsection
