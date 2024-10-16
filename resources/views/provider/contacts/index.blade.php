@extends('admin.layouts.main')

@section('content')

<!-- Start Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Contact List</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Contacts</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Add New Contact</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="contactsList">
                                    <thead>
                                        <tr>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Link</th>
                                            <th>Location</th>
                                            <th class="text-end">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->phone_number }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>
                                                <a href="{{ $contact->link }}" target="_blank">
                                                    {{ $contact->link }}
                                                </a>
                                            </td>
                                            <td>{{ $contact->location }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('contacts.show', $contact->id) }}" class="avatar-text avatar-md">
                                                        <i class="feather-eye"></i>
                                                    </a>

                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('contacts.edit', $contact->id) }}">
                                                                    <i class="feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form class="dropdown-item" action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="event.preventDefault(); showDeleteModal(this);">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn" style="background: none; border: none; padding: 0; color:black;">
                                                                        <i class="feather feather-trash-2 me-3"></i>
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
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="">
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
</main>
<!-- End Main Content -->
<div id="deleteConfirmationModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Confirm Deletion</h5>
            <button type="button" class="modal-close btn" style="color:black;" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body">
            <p>Please solve the following math problem to confirm deletion:</p>
            <div class="form-group">
                <label id="mathProblem"></label>
                <input type="number" class="form-control" id="mathAnswer" placeholder="Enter your answer">
                <input type="hidden" id="correctAnswer">
            </div>
            <div class="alert alert-danger mt-3 d-none" id="errorAlert">Incorrect answer. Please try again.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="modal-cancel" onclick="closeModal()">Cancel</button>
            <button type="button" class="modal-confirm" id="confirmDeleteButton">Delete</button>
        </div>
    </div>
</div>

@endsection
