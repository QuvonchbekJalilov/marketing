@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Xizmatlar</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item">Xizmatlar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <a href="{{ route('services.create') }}" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Xizmat qo'shish</span>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div id="serviceList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div id="serviceList_filter" class="dataTables_filter">
                                            <label>Qidirish:<input type="search" class="form-control form-control-sm" placeholder="Xizmatlarda qidiring..." name="search" id="serviceSearch" aria-controls="serviceList"></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="userId" value="{{ auth()->user()->id }}">
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover dataTable" id="serviceList" aria-describedby="serviceList_info">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Kategoriya</th>
                                                    <th>Nomi (UZ)</th>
                                                    <th>Nomi (RU)</th>
                                                    <th>Nomi (EN)</th>
                                                    <th class="hstack gap-2 justify-content-end">Harakatlar</th>
                                                </tr>
                                            </thead>
                                            @include('admin.services.partials.service_list', ['services' => $services])
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="serviceList_info" role="status" aria-live="polite">
                                            Ko'rsatilmoqda {{ $services->firstItem() }} dan {{ $services->lastItem() }} gacha, jami {{ $services->total() }} ta yozuvlar
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="serviceList_paginate">
                                            {{ $services->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#serviceSearch').on('keyup', function(){
            var search = $(this).val();
            $.ajax({
                url: "/api/service/filter",
                type: "GET",
                data: {
                    search: search
                },
                success: function(response){
                    $('#serviceList tbody').html(response);
                },
                error: function(xhr) {
                    console.log('Xatolik yuz berdi:', xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
