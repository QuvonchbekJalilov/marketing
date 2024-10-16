@extends('provider.layouts.layout')

@section('content')
@php
    use App\Models\ServiceSubCategory;
@endphp
   <link rel="stylesheet" type="text/css" href="assets/vendors/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/select2-theme.min.css">
<div class="nxl-content without-header nxl-full-content">
    <!-- [ Main Content ] start -->
    <div class="main-content d-flex">
        <!-- [ Content Sidebar ] start -->
        @include('provider.components.single-sidebar')
        <!-- [ Content Sidebar  ] end -->
        <!-- [ Main Area  ] start -->
        <div class="content-area" data-scrollbar-target="#psScrollbarInit">
            <div class="content-area-header bg-white sticky-top">
                <div class="page-header-right ms-auto">
                    <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-primary"
                        data-bs-toggle="offcanvas" data-bs-target="#serviceProviderOffcanvas">
                            <i class="feather-plus me-2"></i>
                            <span>Add New</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-area-body">
                <div class="card mb-0">
                    <div class="card-body">
                        <!--! BEGIN: [Users] !-->
                        <div class="card stretch stretch-full mb-0">
                          <div class="card-header">
                                <h5 class="card-title">Service</h5>
                            </div>
                                @foreach ($services as $service)
                                    @php
                                        $subCategory = ServiceSubCategory::where('id', $service->service_sub_category_id)->first();
                                    @endphp
                                    <div class="card-body custom-card-action">
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <!-- Display Service List Name -->
                                                    <a href="javascript:void(0)" class="d-flex align-items-center mb-1" data-bs-toggle="offcanvas" data-bs-target="#editServiceModal{{ $service->id }}">
                                                        {{ $subCategory->name_en ?? 'No Service List' }}
                                                    </a>
                                                    <div class="fs-12 fw-normal text-muted">
                                                        <!-- Display Skills -->
                                                        @if($service->skills->isNotEmpty())
                                                            <ul>
                                                                @foreach($service->skills as $skill)
                                                                    <li>{{ $skill->name_en ?? $skill->name }}</li> <!-- Displaying each skill in English or fallback -->
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            No skills assigned
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hstack gap-2 justify-content-end">
                                                <!-- Edit Button -->
                                                <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#editServiceModal{{ $service->id }}">
                                                    <i class="feather feather-edit-3"></i>
                                                </a>

                                                <!-- Delete Button -->
                                                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('service.destroy', $service->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-dark p-0 border-0" style="background: none;">
                                                        <i class="feather feather-trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr class="border-dashed my-3">
                                    </div>
                                @endforeach

                                <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center"
                                            data-bs-toggle="offcanvas" data-bs-target="#serviceProviderOffcanvas">Add New
                                </a>

                        </div>

                        <!--! END: [Users] !-->

                    </div>
                </div>
            </div>

        </div>
        <!-- [ Content Area ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

@include('provider.components.services.provider-service-modal' )
@include('provider.components.services.provider-service-edit-modal',$services)

  <script src="assets/vendors/js/select2.min.js"></script>
    <script src="assets/vendors/js/select2-active.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2 on the Skills dropdown
        $('#skills-list').select2({
            placeholder: "Select skills",
            allowClear: true,
            theme: 'bootstrap-5'
        });
    });
</script>


@endsection
