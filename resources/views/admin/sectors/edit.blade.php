@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Sektorni tahrirlash</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sectors.index') }}">Sektorlar</a></li>
                <li class="breadcrumb-item">Sektorni tahrirlash</li>
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
                        <form action="{{ route('sectors.update', $sector->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name_uz" class="form-label">Sektor nomi (UZ)</label>
                                <input type="text" name="name_uz" class="form-control" id="name_uz" value="{{ $sector->name_uz }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_ru" class="form-label">Sektor nomi (RU)</label>
                                <input type="text" name="name_ru" class="form-control" id="name_ru" value="{{ $sector->name_ru }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_en" class="form-label">Sektor nomi (EN)</label>
                                <input type="text" name="name_en" class="form-control" id="name_en" value="{{ $sector->name_en }}" required>
                            </div>
                           
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary me-2">Saqlash</button>
                                <a href="{{ route('sectors.index') }}" class="btn btn-secondary">Orqaga qaytish</a>
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
