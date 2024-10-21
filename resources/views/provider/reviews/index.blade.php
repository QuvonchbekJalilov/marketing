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
                                data-bs-target="#reviewProviderOffcanvas">
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
                                <div class="table-responsive">
                                    <div class="table-responsive" style="min-height: 500px">
                                        <table class="table table-hover" id="reviewsList">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Client Name') }}</th>
                                                    <th>{{ __('Rating') }}</th>
                                                    <th>{{ __('Published At') }}</th>
                                                    <th>{{ __('Link') }}</th>
                                                    <th>{{__('Status')}}</th>
                                                    <th class="text-end">{{ __('Settings') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reviews as $review)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('reviews.show', $review->id) }}"
                                                                class="hstack gap-3">
                                                                <div>
                                                                    <span
                                                                        class="text-truncate-1-line">{{ $review->full_name }}
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td><a href="#">{{ $review->scoro ?? null }}</a></td>
                                                        </td>
                                                        <td><a href="">{{ $review->created_at->format("Y-m-d") }}</a></td>
                                                        <td><a href="{{ $review->review_source }}"
                                                                target="_blank">{{ __('Link') }}</a></td>
                                                                <td>
                                                                    @if($review->status == 'not confirmed')
                                                                        <span class="text-danger">{{ $review->status }}</span>
                                                                    @else
                                                                        <span class="text-success">{{ $review->status }}</span>
                                                                    @endif
                                                                </td>
                                                            <td>
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                    data-bs-toggle="offcanvas"
                                                                    data-bs-target="#editReviewProviderOffcanvas{{ $review->id }}">
                                                                    <i class="feather feather-edit-3"></i>
                                                                </a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0)"
                                                                        class="avatar-text avatar-md"
                                                                        data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                        <i class="feather feather-more-horizontal"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="offcanvas"
                                                                                data-bs-target="#editReviewProviderOffcanvas{{ $review->id }}">
                                                                                <i class="feather feather-edit-3 me-3"></i>
                                                                                <span>Edit</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <form class="dropdown-item"
                                                                                action="{{ route('reviews.destroy', $review->id) }}"
                                                                                method="POST"
                                                                                onsubmit="confirmDelete(event)">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn"
                                                                                    style="background: none; border: none; padding: 0; color:black;">
                                                                                    <i
                                                                                        class="feather feather-trash-2 me-3"></i>
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
    @include('provider.components.reviews.provider-review-modal')
    @include('provider.components.reviews.provider-review-edit-modal')
    {{-- @include('admin.components.reviews.provider-review-view-modal') --}}


    <script>
        function confirmDelete(event) {
            event.preventDefault();
            var num1 = Math.floor(Math.random() * 10) + 1;
            var num2 = Math.floor(Math.random() * 10) + 1;
            var correctAnswer = num1 + num2;

            Swal.fire({
                title: 'Matematik amalni bajaring',
                text: `${num1} + ${num2} = ?`,
                input: 'text',
                inputPlaceholder: 'Javobni kiriting',
                showCancelButton: true,
                confirmButtonText: 'Tasdiqlash',
                cancelButtonText: 'Bekor qilish',
                preConfirm: (answer) => {
                    if (parseInt(answer) === correctAnswer) {
                        return true;
                    } else {
                        Swal.showValidationMessage(
                            'Notog\'ri javob. O\'chirish uchun to\'g\'ri javob kiritilishi kerak.'
                        );
                        return false;
                    }
                }
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        title: 'O\'chirishni tasdiqlaysizmi?',
                        text: "Bu amalni bekor qilib bo'lmaydi!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ha, o\'chirilsin!',
                        cancelButtonText: 'Bekor qilish'
                    }).then((result) => {
                        if (result.value) {
                            event.target.submit();
                        }
                    });
                }
            });
        }
    </script>
@endsection
