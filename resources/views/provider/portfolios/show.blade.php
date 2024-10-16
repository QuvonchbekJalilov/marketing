@extends('layouts.layout')

@section('content')

<!-- Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Portfolio Details</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
                    <li class="breadcrumb-item">Portfolio Details</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-primary">
                        <i class="feather-edit me-2"></i>
                        <span>Edit Portfolio</span>
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
                        <div class="card-body">
                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Name:</div>
                                <div class="col-lg-8">{{ $portfolio->name }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Image:</div>
                                <div class="col-lg-8">
                                    <img src="{{ $portfolio->image }}" alt="{{ $portfolio->name }}" style="max-width: 100%; height: auto;">
                                </div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Skills:</div>
                                <div class="col-lg-8">{{ $portfolio->skills }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Budget:</div>
                                <div class="col-lg-8">${{ number_format($portfolio->budget, 2) }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Start Date:</div>
                                <div class="col-lg-8">{{ \Carbon\Carbon::parse($portfolio->start_date)->format('F j, Y') }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">End Date:</div>
                                <div class="col-lg-8">{{ \Carbon\Carbon::parse($portfolio->end_date)->format('F j, Y') }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Introduction:</div>
                                <div class="col-lg-8">{{ $portfolio->introduction }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Challenges:</div>
                                <div class="col-lg-8">{{ $portfolio->challenges }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Solution:</div>
                                <div class="col-lg-8">{{ $portfolio->solution }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Impact:</div>
                                <div class="col-lg-8">{{ $portfolio->impact }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Link:</div>
                                <div class="col-lg-8"><a href="{{ $portfolio->link }}" target="_blank">{{ $portfolio->link }}</a></div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Company Name:</div>
                                <div class="col-lg-8">{{ $portfolio->company_name }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Company Location:</div>
                                <div class="col-lg-8">{{ $portfolio->company_location }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Sector:</div>
                                <div class="col-lg-8">{{ $portfolio->sector }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Audience:</div>
                                <div class="col-lg-8">{{ $portfolio->audience }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Email:</div>
                                <div class="col-lg-8">{{ $portfolio->email }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Service:</div>
                                <div class="col-lg-8">{{ $portfolio->service->name }}</div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4 fw-semibold">Provider:</div>
                                <div class="col-lg-8">{{ $portfolio->provider->name }}</div>
                            </div>

                           <div class="row mb-4">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-start gap-2">
                                        <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-primary">
                                            <i class="feather-edit me-2"></i>
                                            Edit Portfolio
                                        </a>
                                        <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="feather-trash me-2"></i>
                                                Delete Portfolio
                                            </button>
                                        </form>
                                        <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">
                                            <i class="feather-arrow-left me-2"></i>
                                            Back to Portfolios
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
</main>
<!-- End Main Content -->

@endsection
