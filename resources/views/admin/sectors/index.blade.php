@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Sektorlar</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item">Sektorlar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <a href="{{ route('sectors.create') }}" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Sektor qo'shish</span>
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
                            <div id="sectorList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div id="sectorList_filter" class="dataTables_filter">
                                            <label>Qidirish:<input type="search" class="form-control form-control-sm" placeholder="Sektorlarda qidiring..." name="search" id="sectorSearch" aria-controls="sectorList"></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="userId" value="{{ auth()->user()->id }}">
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover dataTable" id="sectorList" aria-describedby="sectorList_info">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nomi (UZ)</th>
                                                    <th>Nomi (RU)</th>
                                                    <th>Nomi (EN)</th>
                                                    <th class="hstack gap-2 justify-content-end">Harakatlar</th>
                                                </tr>
                                            </thead>
                                            @include('admin.sectors.partials.sector_list', ['sectors' => $sectors])
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="sectorList_info" role="status" aria-live="polite">
                                            Ko'rsatilmoqda {{ $sectors->firstItem() }} dan {{ $sectors->lastItem() }} gacha, jami {{ $sectors->total() }} ta yozuvlar
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="sectorList_paginate">
                                            {{ $sectors->links() }}
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
        $('#sectorSearch').on('keyup', function(){
            var search = $(this).val();
            $.ajax({
                url: "/api/sector/filter",
                type: "GET",
                data: {
                    search: search
                },
                success: function(response){
                    $('#sectorList tbody').html(response);
                },
                error: function(xhr) {
                    console.log('Xatolik yuz berdi:', xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
