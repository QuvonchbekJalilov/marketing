@extends('admin.layouts.main')

@section('content')

    <!-- Main Content -->
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Подробности награды</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Дом</a></li>
                        <li class="breadcrumb-item"><a href="/admin/awards">Награды</a></li>
                        <li class="breadcrumb-item active">Подробности</li>
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
                                        <a href="#" class="nav-link text-start">Подробности награды :</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <!-- Details Tab -->
                                <div class="tab-pane fade show active" id="detailsTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Категория :</div>
                                            <div class="col-lg-8">{{ $award->category->name }}</div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Имя :</div>
                                            <div class="col-lg-8">{{ $award->name }}</div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Дата :</div>
                                            <div class="col-lg-8">{{ $award->date }}</div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Связь :</div>
                                            <div class="col-lg-8">
                                                <a href="{{ $award->link }}" target="_blank">{{ $award->link }}</a>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-lg-4 fw-semibold">Провайдер :</div>
                                            <div class="col-lg-8">{{ $award->provider->name }}</div>
                                        </div>

                                        <a href="{{ route('awards.index') }}" class="btn btn-secondary">Вернуться к списку</a>
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
