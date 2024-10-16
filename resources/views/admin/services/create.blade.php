@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Xizmatni qo'shish</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Xizmatlar</a></li>
                <li class="breadcrumb-item">Xizmatni qo'shish</li>
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
                        <form action="{{ route('services.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="service_category_id" class="form-label">Kategoriyani tanlang</label>
                                <select name="service_category_id" class="form-select" id="service_category_id" required>
                                    <option value=""  style="color: black;">Kategoriyani tanlang</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" style="color: black;">{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name_uz" class="form-label">Xizmat nomi (UZ)</label>
                                <input type="text" name="name_uz" class="form-control" id="name_uz" placeholder="Xizmat nomini kiriting" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_ru" class="form-label">Xizmat nomi (RU)</label>
                                <input type="text" name="name_ru" class="form-control" id="name_ru" placeholder="Xizmat nomini kiriting" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_en" class="form-label">Xizmat nomi (EN)</label>
                                <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Xizmat nomini kiriting" required>
                            </div>

                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary me-2">Saqlash</button>
                                <a href="{{ route('services.index') }}" class="btn btn-secondary">Orqaga qaytish</a>
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
