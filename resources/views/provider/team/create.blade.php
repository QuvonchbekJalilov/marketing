@extends('layouts.layout')

@section('content')

<!-- Start Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Create Team</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Teams</a></li>
                    <li class="breadcrumb-item">Create Team</li>
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
                            <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="imageInput" class="fw-semibold">Image:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" id="imageInput" name="image">
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="descriptionInput" class="fw-semibold">Description:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="descriptionInput" name="description" rows="4" required></textarea>
                                    </div>
                                </div>

                                <input type="hidden" name="provider_id" value="{{ Auth()->user()->provider_id }}">

                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-start gap-2">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather feather-check me-2"></i>
                                                Save Team
                                            </button>
                                            <a href="{{ route('teams.index') }}" class="btn btn-secondary">
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
