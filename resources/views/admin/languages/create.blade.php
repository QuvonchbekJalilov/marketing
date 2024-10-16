@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Til qo'shish</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('languages.index') }}">Tillar</a></li>
                <li class="breadcrumb-item">Til qo'shish</li>
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
                        <form action="{{ route('languages.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Til nomi (UZ)</label>
                                <input type="text" name="name_uz" class="form-control" id="name_uz" placeholder="Til nomini kiriting">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Til nomi (RU)</label>
                                <input type="text" name="name_ru" class="form-control" id="name_ru" placeholder="Til nomini kiriting">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Til nomi (EN)</label>
                                <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Til nomini kiriting">
                            </div>
                            
                            <div class="mb-3">
                                <label for="code" class="form-label">Kod</label>
                                <input type="text" name="code" class="form-control" id="code" placeholder="Til kodi (masalan: uz)">
                            </div>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary me-2">Saqlash</button>
                                <a href="{{ route('languages.index') }}" class="btn btn-secondary">Orqaga qaytish</a>
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
