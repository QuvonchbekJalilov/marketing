@extends('layouts.layout')

@section('content')

<!-- Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Service Details</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                    <li class="breadcrumb-item">Service Details</li>
                </ul>
            </div>
            
        </div>
        <!-- End Page Header -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-lg-8">
                                    {{ $service->name }}
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Category:</strong>
                                </div>
                                <div class="col-lg-8">
                                    {{ $service->category->name ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Starting Price:</strong>
                                </div>
                                <div class="col-lg-8">
                                    ${{ number_format($service->startingPrice, 2) }}
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Skills:</strong>
                                </div>
                                <div class="col-lg-8">
                                    {{ $service->skills }}
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Description:</strong>
                                </div>
                                <div class="col-lg-8">
                                    {{ $service->description }}
                                </div>
                            </div>

                        </div>
                        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back to List</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
</main>
<!-- End Main Content -->

@endsection
