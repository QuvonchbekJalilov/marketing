@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Marketologlar</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item">Marketologlar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <a href="{{ route('marketers.create') }}" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Marketolog qo'shish</span>
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
                            <div id="marketerList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div id="marketerList_filter" class="dataTables_filter">
                                            <label>Qidirish:<input type="search" class="form-control form-control-sm" placeholder="Marketologlarni qidiring..." name="search" id="marketerSearch" aria-controls="marketerList"></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="userId" value="{{ auth()->user()->id }}">
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover dataTable" id="marketerList" aria-describedby="marketerList_info">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Ism</th>
                                                    <th>Email</th>
                                                    <th class="hstack gap-2 justify-content-end">Harakatlar</th>
                                                </tr>
                                            </thead>
                                            @include('admin.marketers.partials.marketer_list', ['marketers' => $marketers])
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="marketerList_info" role="status" aria-live="polite">
                                            {{ $marketers->firstItem() }} dan {{ $marketers->lastItem() }} gacha, jami {{ $marketers->total() }} yozuvlar ko'rsatilmoqda
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="marketerList_paginate">
                                            {{ $marketers->links() }}
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
        $('#marketerSearch').on('keyup', function(){
            var search = $(this).val();
            var marketerLength = $('select[name="marketer_length"]').val();

            $.ajax({
                url: "/api/marketer/filter",
                type: "GET",
                data: {
                    search: search,
                    marketer_length: marketerLength,
                },
                success: function(response){
                    $('#marketerList tbody').html(response);
                },
                error: function(xhr) {
                    console.log('Marketologlarni olishda xato:', xhr.responseText);
                }
            });
        });

        $('select[name="marketer_length"]').on('change', function(){
            $('#marketerSearch').trigger('keyup');
        });
    });
</script>

@endsection
