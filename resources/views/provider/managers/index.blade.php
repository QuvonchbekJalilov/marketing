@extends('provider.layouts.layout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<style>
    .swal2-cancel{
        background-color: red !important;
        color: #fff !important;
    }
    .swal2-confirm{
        color: #6c757d !important;
        border-color: #6c757d !important;
        background-color: transparent !important;

        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>


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
                    @if (auth()->user()->role_id == 2)
                    <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-primary"
                            data-bs-toggle="offcanvas" data-bs-target="#managerProviderOffcanvas">
                            <i class="feather-plus me-2"></i>
                            <span>Add New</span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="content-area-body">
                @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
            @if (auth()->user()->role_id == 2)
                <div class="card mb-0">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf  <!-- CSRF token, xavfsizlik uchun -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="send_email" class="form-control" required>
                            </div>
                            <div class="flex mt-3">
                                <button type="submit" class="btn btn-primary">Send an offer</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
            </div>
            <div class="content-area-body">
                <div class="card mb-0">
                    <div class="card-body">
                        <!--! BEGIN: [Users] !-->
                        <div class="card stretch stretch-full mb-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="managersList">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($managers as $manager)
                                        <tr data-id="{{ $manager->id }}">
                                            <td>{{ $manager->name }}</td>
                                            <td>{{ $manager->email }}</td>
                                            <td>{{ $manager->role->name }}</td>
                                            @if(auth()->user()->role_id == 2)
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                            <a class="avatar-text avatar-md" href="javascript:void(0);"  data-bs-toggle="offcanvas" data-bs-target="#managerEditProviderOffcanvas{{ $manager->id }}" >
                                                                <i class="feather feather-edit-3 me-3"></i>
                                                            </a>
                                                            <form class="avatar-text avatar-md delete-button" onsubmit="confirmDelete(event)" action="{{ route('managers.destroy', $manager->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn text-dark p-0 border-0" style="background: none;">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                </button>
                                                            </form>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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





@include('provider.components.managers.provider-manager-modal')
@include('provider.components.managers.edit-provider-manager-modal', $managers)


@include('provider.components.managers.view-provider-manager-modal')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.dropdown-item[data-bs-target="#managerEditProviderOffcanvas"]').forEach(button => {
            button.addEventListener('click', () => {
                const managerId = button.closest('tr').dataset.id;
                document.getElementById('editManagerForm').action = `https://marketing.dora.uz/provider/managers/${managerId}/edit`;
                document.getElementById('forGetId').value = managerId;


            });
        });
    });


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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
