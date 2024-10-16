@extends('provider.layouts.layout')

@section('content')
    <div class="nxl-content without-header nxl-full-content">
        <!-- [ Main Content ] start -->
        <div class="main-content d-flex">
            <!-- [ Content Sidebar ] start -->
            @include('provider.components.single-sidebar')
            <!-- [ Content Sidebar  ] end -->
            <!-- [ Main Area  ] start -->
            <div class="content-area" data-scrollbar-target="#psScrollbarInit">

                <div class="content-area-header bg-white sticky-top">
                    <div class="page-header-right ms-auto">
                        <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas"
                                data-bs-target="#">
                                <i class="feather-plus me-2"></i>
                                <span>Add New</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-area-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card mb-0">
                        <form action="{{ route('provider.update', $provider->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xxl-4 col-xl-6">
                                    <div class="card stretch stretch-full">
                                        <div class="card-body">
                                            <div class="mb-4 text-center">
                                                <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                                                    <div
                                                        class="avatar-image wd-150 ht-150 border border-5 border-gray-3 position-relative">
                                                        <img id="avatarPreview"
                                                        src="{{ $company->logo ? asset('storage/' . $company->logo) : 'salom' }}" alt=""
                                                        style="height: 18em; width: 100%; object-fit: cover;"
                                                            class="img-fluid" />
                                                    </div>
                                                    <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle"
                                                        style="top: 68%; right: 18px">
                                                        <label for="logoInput" class="overflow-hidden">
                                                            <i class="fa-solid fa-pen-to-square border rounded-circle p-3 bg-light"
                                                                style="cursor: pointer;"></i>
                                                            <input type="file" class="form-control" id="logoInput"
                                                                name="logo" style="opacity: 0; visibility: hidden;"
                                                                accept="image/*">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-4">

                                                    <a href="javascript:void(0);" class="fs-14 fw-bold d-block">
                                                        {{ old('name', $provider->name) }}</a>
                                                    <a href="javascript:void(0);"
                                                        class="fs-12 fw-normal text-muted d-block">{{ old('email', $provider->email) }}</a>
                                                </div>
                                                <div
                                                    class="fs-12 fw-normal text-muted text-center d-flex flex-wrap gap-3 mb-4">
                                                    <div
                                                        class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                                        <h6 class="fs-15 fw-bolder">28.65K</h6>
                                                        <p class="fs-12 text-muted mb-0">Subscribers</p>
                                                    </div>
                                                    <div
                                                        class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                                        <h6 class="fs-15 fw-bolder">38.85K</h6>
                                                        <p class="fs-12 text-muted mb-0">Follow up</p>
                                                    </div>
                                                    <div
                                                        class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                                        <h6 class="fs-15 fw-bolder">43.67K</h6>
                                                        <p class="fs-12 text-muted mb-0">Comment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled mb-4">
                                                <li class="hstack justify-content-between mb-4">
                                                    <span class="text-muted fw-medium hstack gap-3"><i
                                                            class="feather-phone"></i>Phone</span>
                                                    <a href="javascript:void(0);"
                                                        class="float-end">{{ old('tagline', $company->phone_number) }}</a>
                                                </li>

                                                <li class="hstack justify-content-between mb-4">
                                                    <span class="text-muted fw-medium hstack gap-3"><i
                                                            class="feather-mail"></i>Email</span>
                                                    <a href="javascript:void(0);"
                                                        class="float-end">{{ old('email', $company->email) }}</a>
                                                </li>
                                                <li class="hstack justify-content-between mb-4">
                                                    <span class="text-muted fw-medium hstack gap-3"><i
                                                            class="feather-map-pin"></i>Location</span>
                                                            <a href="javascript:void(0);" title="{{old('tagline', $provider->address)}}" class="float-end long-text text-center mx-1" onclick="toggleAddress(this)">
                                                                {{ Str::limit(old('tagline', $company->address), 100) }} <!-- Laravel yordamida matnni cheklash -->
                                                            </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-6">
                                    <div class="col-12">
                                        <div class="card stretch stretch-full border-0 rounded">
                                            <div class="position-relative">
                                                    <img id="coverPreview"
                                                    src="{{ $company->cover ? asset('storage/' . $company->cover) : 'salom' }}"
                                                        alt="Cover"
                                                        style="height: 18em; width: 100%; object-fit: cover;" />
                                                <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle"
                                                    style="bottom: 10%; right: 3%;">
                                                    <label for="coverInput" class="overflow-hidden">
                                                        <i class="fa-solid fa-pen-to-square border rounded-circle p-3 bg-light"
                                                            style="cursor: pointer;"></i>
                                                        <input type="file" class="form-control" id="coverInput"
                                                            name="cover" style="opacity: 0; visibility: hidden;"
                                                            accept="image/*">
                                                    </label>
                                                    @error('cover')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-top-0">

                                        {{-- <div class="card-header p-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs"
                                                id="myTab" role="tablist">
                                                <li class="nav-item flex-fill border-top" role="presentation">
                                                    <a href="javascript:void(0);" class="nav-link active"
                                                        data-bs-toggle="tab" data-bs-target="#overviewTab"
                                                        role="tab">{{ old('name', $provider->name) ?: 'Kompaniya' }}</a>
                                                </li>

                                            </ul>
                                        </div> --}}

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active p-4" id="overviewTab" role="tabpanel">
                                                <div class="about-section mb-5">
                                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                                        <h5 class="fw-bold mb-0">
                                                            About: {{ old('name', $provider->name) ?: 'Kompaniya' }}
                                                            </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="description" style="height: 18em;">{{ old('description', $company->description) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="profile-details mb-5">
                                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                                        <h5 class="fw-bold mb-0">Profile:</h5>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Company name:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="text" class="form-control" id="nameInput"
                                                                placeholder="Name" name="name"
                                                                value="{{ old('name', $company->name) }}">
                                                        </div>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Motto:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="text" class="form-control" id="taglineInput"
                                                                placeholder="Tagline" name="tagline"
                                                                value="{{ old('tagline', $company->tagline) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Website:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="text" class="form-control" id="taglineInput"
                                                                placeholder="website" name="website"
                                                                value="{{ old('website', $company->website) }}">
                                                        </div>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Address:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="text" class="form-control" id="addressInput"
                                                                placeholder="Address" name="address"
                                                                value="{{ old('tagline', $company->address) }}">
                                                        </div>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Phone number:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="tel" class="form-control" id="phone_number"
                                                                placeholder="Phone number" name="phone_number"
                                                                value="{{ old('phone', $company->phone_number) }}">
                                                        </div>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Email:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="email" class="form-control" id="emailInput"
                                                                placeholder="Email" name="email"
                                                                value="{{ old('email', $company->email) }}">
                                                        </div>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Languages:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <select class="form-select form-control max-select"
                                                                    name="languages[]" data-select2-selector="tag" multiple>
                                                                @foreach ($languages as $language)
                                                                    <option value="{{ $language->code }}"
                                                                        @if (in_array($language->code, $providerLanguageCodes)) selected @endif>
                                                                        {{ $language->name_uz }}
                                                                    </option>
                                                                @endforeach
                                                            </select>


                                                        </div>
                                                    </div>
                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Founded Date:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="date" class="form-control"
                                                                id="foundedAtInput" name="founded"
                                                                value="{{ old('foundedAt', isset($company->founded) ? date('Y-m-d', strtotime($company->founded)) : '') }}">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Service price:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="text" class="form-control" id="turnoverInput"
                                                                placeholder="Turnover" name="turnover"
                                                                value="{{ old('turnover', $company->turnover) }}">
                                                        </div>
                                                    </div>

                                                    <div class="row g-0 mb-4">
                                                        <div class="col-sm-6 text-muted">Team size:</div>
                                                        <div class="col-sm-6 fw-semibold">
                                                            <input type="number" class="form-control" id="teamSizeInput"
                                                                name="teamSize"
                                                                value="{{ old('foundedAt', $company->number_of_team)}}">
                                                        </div>
                                                    </div>
                                                    @foreach(auth()->user()->companies as $company)
                                                        <input type="hidden" value="{{ $company->id }}" name="companies[]">
                                                    @endforeach

                                                    <div class="row g-0 mb-4 providerSubmit" id="providerSubmit"
                                                        style="display: none;">
                                                        <button type="submit" class="btn btn-primary">Saqlash</button>
                                                    </div>

                                                </div>
                                                <div class="alert alert-dismissible mb-4 p-4 d-flex alert-soft-warning-message profile-overview-alert"
                                                    role="alert">
                                                    <div class="me-4 d-none d-md-block">
                                                        <i class="feather feather-alert-triangle fs-1"></i>
                                                    </div>
                                                    <div>
                                                        <p class="fw-bold mb-1 text-truncate-1-line">You must maintain your account regularly</p>
                                                        <p class="fs-10 fw-medium text-uppercase text-truncate-1-line">
                                                            Last update: <strong>31 Avg, 2024</strong></p>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-sm bg-soft-warning text-warning d-inline-block">Read more</a>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- [ Content Area ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>



    <script>
        const coverInput = document.getElementById('coverInput');
        const coverPreview = document.getElementById('coverPreview');

        coverInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // Yangi yuklangan rasm URL'ini yaratish va img elementiga o'rnatish
                coverPreview.src = URL.createObjectURL(file);
                coverPreview.style.display = 'block'; // Agar rasm avval mavjud bo'lmagan bo'lsa, ko'rsatish
            }
        });

        const logoInput = document.getElementById('logoInput');
        const avatarPreview = document.getElementById('avatarPreview');

        logoInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // Yangi yuklangan rasm URL'ini yaratish va img elementiga o'rnatish
                avatarPreview.src = URL.createObjectURL(file);
            }
        });

        // name atributiga ega barcha input, textarea va select elementlarini qidiramiz
        const formInputs = document.querySelectorAll('form [name]');
        const submitButtonRow = document.getElementById('providerSubmit');

        formInputs.forEach(input => {
            input.addEventListener('input', function() {
                // Agar inputda o'zgarish bo'lsa, submit tugmasini ko'rsatamiz
                submitButtonRow.style.display = 'block';
            });
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const phoneInput = document.getElementById('phone_number');
        const pattern = /^\+998[- ]?(90|91|93|94|95|98|99|33|97|71)[- ]?(\d{3})[- ]?(\d{2})[- ]?(\d{2})$/;

        // Only set the initial value to +998 if the input is empty
        if (!phoneInput.value.trim()) {
            phoneInput.value = '+998 ';
        }

        phoneInput.addEventListener('input', (e) => {
            let value = e.target.value;

            // Ensure the value always starts with +998
            if (!value.startsWith('+998 ')) {
                value = '+998 ' + value.replace(/^\+998\s*/, '');
            }

            // Remove invalid characters
            value = value.replace(/[^\d+ ]/g, '');

            // Format value according to the pattern
            const match = value.match(/^\+998\s?(90|91|93|94|95|98|99|33|97|71)?\s?(\d{0,3})?\s?(\d{0,2})?\s?(\d{0,2})?/);
            if (match) {
                let formattedValue = '+998 ';
                if (match[1]) formattedValue += match[1] + ' ';
                if (match[2]) formattedValue += match[2] + (match[2].length === 3 ? ' ' : '');
                if (match[3]) formattedValue += match[3] + (match[3].length === 2 ? ' ' : '');
                if (match[4]) formattedValue += match[4];
                value = formattedValue;
            }

            e.target.value = value.trim();
        });

        phoneInput.addEventListener('keydown', (e) => {
            const value = e.target.value;
            // Allow user to clear the input completely
            if (e.key === 'Backspace' && value.length <= 5) {
                phoneInput.value = ''; // Clear the input field
            }
        });

        // Adjusted selector to use the form class instead of an ID
        document.querySelector('.custom-form').addEventListener('submit', (e) => {
            if (!pattern.test(phoneInput.value)) {
                e.preventDefault();
                alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
            }
        });
    });
</script>

      

@endsection
