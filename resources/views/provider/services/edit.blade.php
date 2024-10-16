@extends('admin.layouts.main')

@section('content')

<!-- Main Content -->
<div class="nxl-content without-header nxl-full-content">
    <!-- [ Main Content ] start -->
    <div class="main-content d-flex">
        <!-- [ Content Sidebar ] start -->
        @include('admin.components.single-sidebar')
        <!-- [ Content Sidebar  ] end -->
        <!-- [ Main Area  ] start -->
        <div class="content-area" data-scrollbar-target="#psScrollbarInit">
            <div class="content-area-header bg-white sticky-top">
                <div class="page-header-right ms-auto">
                    <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-primary">
                            <i class="feather-layers me-2"></i>
                            <span>Save</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-area-body">
                <div class="card mb-0">
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
                        <form action="{{ route('services.update', $service->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4">
                                    <label for="categorySelect" class="fw-semibold">Category:</label>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-control" id="categorySelect" name="category_id" required>
                                        <option value="">Select a category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $service->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4">
                                    <label for="nameInput" class="fw-semibold">Name:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="nameInput" placeholder="Service Name" name="name" value="{{ $service->name }}" required>
                                </div>
                            </div>
                            
                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4">
                                    <label for="priceInput" class="fw-semibold">Starting Price:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control" id="priceInput" placeholder="Starting Price" name="startingPrice" value="{{ $service->startingPrice }}" step="0.01" required>
                                </div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4">
                                    <label for="skillsInput" class="fw-semibold">Skills:</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" id="skillsInput" placeholder="Skills" name="skills" rows="4" required>{{ $service->skills }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-lg-4">
                                    <label for="descriptionInput" class="fw-semibold">Description:</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" id="descriptionInput" placeholder="Description" name="description" rows="4" required>{{ $service->description }}</textarea>
                                </div>
                            </div>
                            <input type="hidden" name="provider_id" value="{{ Auth()->user()->provider_id}}">

                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- [ Content Area ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

@endsection
