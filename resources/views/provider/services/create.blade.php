@extends('layouts.layout')

@section('content')

<!-- Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Create Service</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                    <li class="breadcrumb-item">Create Service</li>
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
                            <form action="{{ route('services.store') }}" method="POST">
                                @csrf
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="categorySelect" class="fw-semibold">Category:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="categorySelect" name="category_id" required>
                                            <option value="">Select a category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="nameInput" class="fw-semibold">Name:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="nameInput" placeholder="Service Name" name="name" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="priceInput" class="fw-semibold">Starting Price:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" id="priceInput" placeholder="Starting Price" name="startingPrice" step="0.01" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="skillsInput" class="fw-semibold">Skills:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="skillsInput" placeholder="Skills" name="skills" rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="descriptionInput" class="fw-semibold">Description:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="descriptionInput" placeholder="Description" name="description" rows="4" required></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="provider_id" value="{{ Auth()->user()->provider_id}}">
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
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
