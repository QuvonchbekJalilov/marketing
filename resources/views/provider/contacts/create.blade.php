@extends('layouts.layout')

@section('content')

<!-- Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Create Contact</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Contacts</a></li>
                    <li class="breadcrumb-item">Create Contact</li>
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
                            <form action="{{ route('contacts.store') }}" method="POST">
                                @csrf
                                

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="phoneInput" class="fw-semibold">Phone Number:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="phoneInput" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="emailInput" class="fw-semibold">Email:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" id="emailInput" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="linkInput" class="fw-semibold">Link:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="linkInput" placeholder="Link" name="link" value="{{ old('link') }}">
                                    </div>
                                </div>

                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="locationInput" class="fw-semibold">Location:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="locationInput" placeholder="Location" name="location" value="{{ old('location') }}">
                                    </div>
                                </div>
                                <input type="hidden" name="provider_id" value="{{ Auth()->user()->provider_id }}">
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
