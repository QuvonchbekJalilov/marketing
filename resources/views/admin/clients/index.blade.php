@extends('admin.layouts.main')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Mijozlar</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item">Mijozlar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <a href="{{ route('clients.create') }}" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Mijoz qo'shish</span>
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
                            <div id="clientList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div id="clientList_filter" class="dataTables_filter">
                                            <label>Qidirish:<input type="search" class="form-control form-control-sm" placeholder="Mijozlarni qidiring..." name="search" id="clientSearch" aria-controls="clientList"></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="userId" value="{{ auth()->user()->id }}">
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover dataTable" id="clientList" aria-describedby="clientList_info">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Ism</th>
                                                    <th>Email</th>
                                                    <th class="hstack gap-2 justify-content-end">Harakatlar</th>
                                                </tr>
                                            </thead>
                                            @include('admin.clients.partials.client_list', ['clients' => $clients])
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="clientList_info" role="status" aria-live="polite">
                                            Ko'rsatilmoqda {{ $clients->firstItem() }} dan {{ $clients->lastItem() }} gacha, jami {{ $clients->total() }} ta yozuvlar
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="clientList_paginate">
                                            {{ $clients->links() }}
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
        $('#clientSearch').on('keyup', function(){
            var search = $(this).val();
            var clientLength = $('select[name="client_length"]').val();

            $.ajax({
                url: "/api/client/filter",
                type: "GET",
                data: {
                    search: search,
                    client_length: clientLength,
                },
                success: function(response){
                    $('#clientList tbody').html(response);
                },
                error: function(xhr) {
                    console.log('Xatolik yuz berdi:', xhr.responseText);
                }
            });
        });

        $('select[name="client_length"]').on('change', function(){
            $('#clientSearch').trigger('keyup');
        });
    });
</script>
@endsection
