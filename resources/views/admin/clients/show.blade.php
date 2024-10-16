@extends('admin.layouts.main')

@section('content')

    <div class="nxl-content without-header nxl-full-content">
        <div class="main-content">
            <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                <div class="content-area-header bg-white sticky-top">
                    <div class="page-header-right ms-auto">
                        <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                            <a href="{{ route('clients.index') }}" class="btn btn-secondary">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Mijozlarga qaytish</span>
                            </a>

                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">
                                <i class="feather-edit me-2"></i>
                                <span>Mijozni tahrirlash</span>
                            </a>

                            <form method="POST" action="{{ route('clients.destroy', $client->id) }}" class="d-inline"
                                onsubmit="confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="feather-trash-2 me-2"></i>
                                    <span>Mijozni o'chirish</span>
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
                                    <h5 class="card-title">{{ $client->name }}</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Ism</th>
                                            <td>{{ $client->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $client->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Telefon raqam</th>
                                            <td>{{ $client->phone_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Manzil</th>
                                            <td>{{ $client->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>Yaratilgan sana</th>
                                            <td>{{ $client->created_at->format('d M, Y') }}</td>
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
