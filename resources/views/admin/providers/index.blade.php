@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Ta'minotchilar</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item">Ta'minotchilar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <a href="{{ route('providers.create') }}" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Ta'minotchini qo'shish</span>
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
                            <div id="providerList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    
                                    <div class="col-sm-12 col-md-12">
                                        <div id="providerList_filter" class="dataTables_filter">
                                            <label>Qidirish:<input type="search" class="form-control form-control-sm" placeholder="Ta'minotchilarni qidiring..." name="search" id="providerSearch" aria-controls="providerList"></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="userId" value="{{ auth()->user()->id }}">
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover dataTable" id="providerList" aria-describedby="providerList_info">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Ism</th>
                                                    <th>Email</th>
                                                    <th class=" hstack gap-2 justify-content-end">Amallar</th>
                                                </tr>
                                            </thead>
                                            @include('admin.providers.partials.provider_list', ['providers' => $providers])
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="providerList_info" role="status" aria-live="polite">
                                            Ko'rsatilmoqda {{ $providers->firstItem() }} dan {{ $providers->lastItem() }} gacha, jami {{ $providers->total() }} ta yozuv
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="providerList_paginate">
                                            {{ $providers->links('vendor.pagination.custom') }}
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('#providerSearch').on('keyup', function(){
            var search = $(this).val();
            var providerLength = $('select[name="provider_length"]').val();

            $.ajax({
                url: "/api/provider/filter",
                type: "GET",
                data: {
                    search: search,
                    provider_length: providerLength,
                },
                success: function(response){
                    $('#providerList tbody').html(response);
                },
                error: function(xhr) {
                    console.log('Ta\'minotchilarni olishda xatolik:', xhr.responseText);
                }
            });
        });

        $('select[name="provider_length"]').on('change', function(){
            $('#providerSearch').trigger('keyup');
        });
    });
</script>

@endsection
