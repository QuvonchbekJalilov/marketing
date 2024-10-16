@extends('layouts.layout')

@section('content')

<!-- Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Portfolio</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
                    <li class="breadcrumb-item">Edit Portfolio</li>
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="nameInput" class="fw-semibold">Name:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="nameInput" placeholder="Portfolio Name" name="name" value="{{ $portfolio->work_title }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="imageInput" class="fw-semibold">Image URL:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="url" class="form-control" id="imageInput" placeholder="Image URL" name="image" value="{{ $portfolio->image }}" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="skillsInput" class="fw-semibold">Skills:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="skillsInput" placeholder="Skills" name="skills" rows="4" required>{{ $portfolio->skills }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="budgetInput" class="fw-semibold">Budget:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" id="budgetInput" placeholder="Budget" name="budget" step="0.01" value="{{ $portfolio->budget }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="startDateInput" class="fw-semibold">Start Date:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control" id="startDateInput" name="start_date" value="{{ $portfolio->start_date }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="endDateInput" class="fw-semibold">End Date:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control" id="endDateInput" name="end_date" value="{{ $portfolio->end_date }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="introductionInput" class="fw-semibold">Introduction:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="introductionInput" placeholder="Introduction" name="introduction" rows="4" required>{{ $portfolio->introduction }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="challengesInput" class="fw-semibold">Challenges:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="challengesInput" placeholder="Challenges" name="challenges" rows="4" required>{{ $portfolio->challenges }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="solutionInput" class="fw-semibold">Solution:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="solutionInput" placeholder="Solution" name="solution" rows="4" required>{{ $portfolio->solution }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="impactInput" class="fw-semibold">Impact:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="impactInput" placeholder="Impact" name="impact" rows="4" required>{{ $portfolio->impact }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="linkInput" class="fw-semibold">Link:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="url" class="form-control" id="linkInput" placeholder="Portfolio Link" name="link" value="{{ $portfolio->link }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="companyNameInput" class="fw-semibold">Company Name:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="companyNameInput" placeholder="Company Name" name="company_name" value="{{ $portfolio->company_name }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="companyLocationInput" class="fw-semibold">Company Location:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="companyLocationInput" placeholder="Company Location" name="company_location" value="{{ $portfolio->company_location }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="sectorInput" class="fw-semibold">Sector:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="sectorInput" placeholder="Sector" name="sector" value="{{ $portfolio->sector }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="audienceInput" class="fw-semibold">Audience:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="audienceInput" placeholder="Audience" name="audience" rows="4" required>{{ $portfolio->audience }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="emailInput" class="fw-semibold">Email:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" id="emailInput" placeholder="Email" name="email" value="{{ $portfolio->email }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="serviceIdSelect" class="fw-semibold">Service:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-select" id="serviceIdSelect" name="service_id" required>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}" {{ $portfolio->service_id == $service->id ? 'selected' : '' }}>
                                                    {{ $service->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="provider_id" value="{{ Auth()->user()->provider_id }}">

                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-start gap-2">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather feather-check me-2"></i>
                                                Update Portfolio
                                            </button>
                                            <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">
                                                <i class="feather feather-x me-2"></i>
                                                Cancel
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
