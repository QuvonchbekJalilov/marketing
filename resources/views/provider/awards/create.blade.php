@extends('admin.layouts.main')

@section('content')
<style>
.air-datepicker {
    border-radius: 0.375rem;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

.air-datepicker-nav {
    padding: 8px 16px;
}

.air-datepicker-cell.-month- {
    padding: 8px 16px;
    border-radius: 0.375rem;
    background-color: #f0f4ff;
}

.air-datepicker-cell.-selected- {
    background-color: #007bff;
    color: #fff;
}

</style>
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <!-- Breadcrumb -->
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Awards</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/awards">Awards</a></li>
                    </ul>
                </div>
                <!-- Page Header Right -->
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>{{ __('awards.back') }}</span>
                            </a>
                        </div>
                       
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            

            <!-- Main Content -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            
                            <div class="card-header p-0">
                                <!-- Nav Tabs -->
                                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="#" class="nav-link text-start">Awards:</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <!-- Profile Tab -->
                                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                        <form action="{{ route('awards.store') }}" method="POST">
                                            @csrf
                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="categorySelect" class="fw-semibold">Category :</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-control max-select" id="categorySelects" name="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="nameInput" class="fw-semibold">Award Name :</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="nameInput" placeholder="name" name="name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="dateInput" class="fw-semibold text-primary">Date :</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="dateInput" placeholder="Select a date" name="date">
                                                </div>
                                            </div>


                                            <div class="row mb-4 align-items-center">
                                                <div class="col-lg-4">
                                                    <label for="linkInput" class="fw-semibold">Link (Optional):</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select class="form-control max-select" id="categorySelect" name="link">
                                                        @foreach($portfolios as $portfolio)
                                                            <option value="{{ $portfolio->link }}">{{ $portfolio->link }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="provider_id" value="{{ Auth()->user()->provider_id}}">
                                            <button type="submit" class="btn btn-primary"> Saqlash </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->
        </div>
        <!-- Footer -->

        <!-- End Footer -->


    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.2.1/air-datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.2.1/air-datepicker.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        new AirDatepicker('#dateInput', {
            view: 'months',  // Start with months view
            minView: 'months', // Users can only select months
            dateFormat: 'MMMM yyyy', // Format as 'March 2024'
            autoClose: true, // Close picker after selection
            selectedDates: [new Date()], // Default to current date
            buttons: ['clear'], // Add a clear button
        });
    });

    </script>
    <!-- Custom Script -->
    <script>
      const today = new Date();
        // Sanani formatlash (YYYY-MM-DD formatida)
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        const formattedDate = `${year}-${month}-${day}`;

        // Input elementiga sanani yozish
        document.getElementById('dateInput').value = formattedDate;

        $(document).ready(function() {
            // Initialize Select2 for type select
            $('.max-select').select2({
                theme: 'bootstrap-5',
                placeholder: 'Tanlang...',
                allowClear: true
            });
        });
    </script>
@endsection
