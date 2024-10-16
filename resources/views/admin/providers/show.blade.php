@extends('admin.layouts.main')

@section('content')

    <div class="nxl-content without-header nxl-full-content">
        <!-- [ Asosiy Mazmun ] start -->
        <div class="main-content">
            <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                <div class="content-area-header bg-white sticky-top">
                    <div class="page-header-right ms-auto">
                        <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                            <a href="{{ route('providers.index') }}" class="btn btn-secondary">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Provayderlarga qaytish</span>
                            </a>

                            <a href="{{ route('providers.edit', $provider->id) }}" class="btn btn-primary">
                                <i class="feather-edit me-2"></i>
                                <span>Provayderni tahrirlash</span>
                            </a>

                            <form method="POST" action="{{ route('providers.destroy', $provider->id) }}" class="d-inline"
                                onsubmit="confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="feather-trash-2 me-2"></i>
                                    <span>Provayderni o'chirish</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="content-area-body">
                    <div class="card mb-0">
                        <div class="card-body">
                            <!-- Provayder Ma'lumotlari -->
                            <div class="card stretch stretch-full mb-0">
                                <div class="card-header">
                                    <h5 class="card-title">{{ $provider->name }}</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Ism</th>
                                            <td>{{ $provider->name }}</td>
                                        </tr>
                                        @if ($provider->companies->isNotEmpty())
                                            <tr>
                                                <th>Kompaniya Emaili</th>
                                                <td>
                                                    @foreach ($provider->companies as $company)
                                                        {{ $company->email }} <br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kompaniya Telefon</th>
                                                <td>
                                                    @foreach ($provider->companies as $company)
                                                        {{ $company->phone_number }} <br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td colspan="2">Ushbu provayder bilan bog'liq kompaniyalar mavjud emas.</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <th>Manzil</th>
                                            <td>
                                                @foreach ($provider->companies as $company)
                                                    {{ $company->address }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Xizmatlar</th>
                                            <td>
                                                @if ($provider->services)
                                                    <ul>
                                                        @foreach ($provider->services as $service)
                                                            <li>{{ $service->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    Xizmatlar berilmagan.
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Yaratilgan Sana</th>
                                            <td>{{ $provider->created_at->format('d M, Y') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Provayder Ma'lumotlari Tugadi -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Mazmun maydoni tugadi ] -->
        </div>
    </div>
    <!-- [ Asosiy Mazmun Tugadi ] -->



@endsection
