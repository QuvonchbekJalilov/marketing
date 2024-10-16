@extends('provider.layouts.layout')

@section('content')

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
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas"
                                data-bs-target="#awardProviderOffcanvas">
                                <i class="feather-plus me-2"></i>
                                <span>Add New</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-area-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card mb-0">
                        <div class="card-body">
                            <!--! BEGIN: [Users] !-->
                            <div class="card stretch stretch-full">
                                <div class="card-header">
                                    <h5 class="card-title">Awards</h5>
                                </div>
                                <div class="card-body custom-card-action">
                                    <table class="table table-hover" id="awardsList">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($awards as $award)
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="hstack gap-3"
                                                            data-bs-toggle="offcanvas"
                                                            data-bs-target="#awardEditProviderOffcanvas{{ $award->id }}">
                                                            <div>
                                                                <span
                                                                    class="text-truncate-1-line">{{ $award->name }}</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td><a href="#">{{ $award->category ?? null }}</a></td>
                                                    <td><a
                                                            href="#">{{ \Carbon\Carbon::parse($award->date)->format('F Y') }}</a>
                                                    </td>
                                                    <td>
                                                        
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <!-- Edit Button -->
                                                            <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#awardEditProviderOffcanvas{{ $award->id }}">
                                                                <i class="feather feather-edit-3"></i>
                                                            </a>
            
                                                            <!-- Delete Button -->
                                                            <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('awards.destroy', $award->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn text-dark p-0 border-0" style="background: none;">
                                                                    <i class="feather feather-trash-2"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center"
                                    data-bs-toggle="offcanvas" data-bs-target="#awardProviderOffcanvas">Add New</a>
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



    @include('provider.components.awards.provider-award-modal')
    @include('provider.components.awards.edit-provider-award-modal', $awards)
    @include('provider.components.awards.view-provider-award-modal')



@endsection
