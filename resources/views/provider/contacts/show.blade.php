@extends('layouts.layout')

@section('content')

<!-- Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Contact Details</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Contacts</a></li>
                    <li class="breadcrumb-item">Contact Details</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">
                        <i class="feather-edit me-2"></i>
                        <span>Edit Contact</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Provider ID:</strong>
                                </div>
                                <div class="col-lg-8">
                                    <p>{{ $contact->provider_id }}</p>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Phone Number:</strong>
                                </div>
                                <div class="col-lg-8">
                                    <p>{{ $contact->phone_number }}</p>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Email:</strong>
                                </div>
                                <div class="col-lg-8">
                                    <p>{{ $contact->email }}</p>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Link:</strong>
                                </div>
                                <div class="col-lg-8">
                                    <p>{{ $contact->link ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <strong>Location:</strong>
                                </div>
                                <div class="col-lg-8">
                                    <p>{{ $contact->location ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="confirmDelete(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="feather-trash-2 me-2"></i> Delete Contact
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
</main>
<!-- End Main Content -->

<script>
function confirmDelete(event) {
    event.preventDefault();
    var num1 = Math.floor(Math.random() * 10) + 1;
    var num2 = Math.floor(Math.random() * 10) + 1;
    var answer = prompt(`Please solve this to confirm deletion: ${num1} + ${num2} = ?`);

    if (answer == (num1 + num2)) {
        event.target.submit();
    } else {
        alert('Incorrect answer. The correct answer is required to delete.');
    }
}
</script>

@endsection
