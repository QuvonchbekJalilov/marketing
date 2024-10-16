@extends('layouts.layout')

@section('content')
    <!-- Main Content -->
    <main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <!-- Breadcrumb -->
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Fikr Tafsilotlari</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('reviews.index') }}">Fikrlar</a></li>
                        <li class="breadcrumb-item active">Ko'rish</li>
                    </ul>
                </div>
                <!-- Page Header Right -->
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Orqaga</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="{{ route('reviews.index') }}" class="btn btn-primary">
                                <i class="feather-list me-2"></i>
                                <span>Fikrlar ro'yxati</span>
                            </a>
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning">
                                <i class="feather-edit me-2"></i>
                                <span>Tahrirlash</span>
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
                                        <a href="#" class="nav-link text-start">Fikr Tafsilotlari :</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <!-- Profile Tab -->
                                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Baho :</div>
                                            <div class="col-lg-8">{{ $review->rating }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Ta'rif :</div>
                                            <div class="col-lg-8">{{ $review->description_summary }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Kelib chiqishi :</div>
                                            <div class="col-lg-8">{{ $review->origin }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Foydalanuvchi Ism :</div>
                                            <div class="col-lg-8">{{ $review->user_full_name }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Email :</div>
                                            <div class="col-lg-8">{{ $review->email }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Ish lavozimi :</div>
                                            <div class="col-lg-8">{{ $review->user_job_title }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Kompaniya Nomi :</div>
                                            <div class="col-lg-8">{{ $review->user_company_name }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Kompaniya Sanoati :</div>
                                            <div class="col-lg-8">{{ $review->company_industry }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Kompaniya Hajmi :</div>
                                            <div class="col-lg-8">{{ $review->company_size }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Xizmat Ko'rsatish :</div>
                                            <div class="col-lg-8">{{ $review->providing_service }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Til :</div>
                                            <div class="col-lg-8">{{ $review->language->name }}</div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-4 fw-semibold">Nashr Qilingan Vaqt :</div>
                                            <div class="col-lg-8">{{ $review->created_at->format('Y-m-d H:i') }}</div>
                                        </div>

                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Orqaga</a>
                                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning">Tahrirlash</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Profile Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->

        </div>
        <div class="nxl-footer"></div>
    </main>
    <!-- End Main Content -->
@endsection
