@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Ko'nikma qo'shish</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('skills.index') }}">Ko'nikmalar</a></li>
                <li class="breadcrumb-item">Ko'nikma qo'shish</li>
            </ul>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger m-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('skills.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="service_id" class="form-label">Xizmatni tanlang</label>
                                <select name="service_id" class="form-select" id="service_id" required>
                                    <option value="" style="color: black;">Xizmatni tanlang</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" style="color: black;">{{ $service->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Ko'nikma nomi</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ko'nikma nomini kiriting" required>
                            </div>

                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary me-2">Saqlash</button>
                                <a href="{{ route('skills.index') }}" class="btn btn-secondary">Orqaga qaytish</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
