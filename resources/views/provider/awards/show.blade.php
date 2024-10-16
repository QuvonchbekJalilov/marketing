@extends('admin.layouts.main')

@section('content')

    <!-- Main Content -->
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Award Details</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/awards">Awards</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ul>
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
                                        <a href="#" class="nav-link text-start">Award Details :</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <!-- Details Tab -->
                                <div class="tab-pane fade show active" id="detailsTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Category :</div>
                                            <div class="col-lg-8">{{ $award->category->name }}</div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Name :</div>
                                            <div class="col-lg-8">{{ $award->name }}</div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Date :</div>
                                            <div class="col-lg-8">{{ $award->date }}</div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Link :</div>
                                            <div class="col-lg-8">
                                                <a href="{{ $award->link }}" target="_blank">{{ $award->link }}</a>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Provider :</div>
                                            <div class="col-lg-8">{{ $award->provider->name }}</div>
                                        </div>

                                        <a href="{{ route('awards.index') }}" class="btn btn-secondary">Back to List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->
        </div>
@endsection
