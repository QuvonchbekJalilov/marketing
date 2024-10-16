@extends('admin.layouts.main')

@section('content')
<div class="nxl-content without-header nxl-full-content">
    <div class="main-content">
        <div class="content-area" data-scrollbar-target="#psScrollbarInit">
            <div class="content-area-header bg-white sticky-top">
                <div class="page-header-right ms-auto">
                    <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Kategoriyalarga qaytish</span>
                        </a>

                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">
                            <i class="feather-edit me-2"></i>
                            <span>Kategoriyani tahrirlash</span>
                        </a>

                        <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="d-inline"
                            onsubmit="confirmDelete(event)">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="feather-trash-2 me-2"></i>
                                <span>Kategoriyani o'chirish</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-area-body">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="card stretch stretch-full mb-0">
                            <div class="card-header">
                                <h5 class="card-title">{{ $category->name_uz }}</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nomi (UZ)</th>
                                        <td>{{ $category->name_uz }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomi (RU)</th>
                                        <td>{{ $category->name_ru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomi (EN)</th>
                                        <td>{{ $category->name_en }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Yaratilgan sana</th>
                                        <td>{{ $category->created_at->format('d M, Y') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
