@extends('layouts.layout')

@section('content')

<!-- Start Main Content -->
<main class="nxl-container" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Team Details</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Teams</a></li>
                    <li class="breadcrumb-item">Team Details</li>
                </ul>
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
                                <div class="col-lg-3">
                                    <label class="fw-semibold">Image:</label>
                                </div>
                                <div class="col-lg-9">
                                    @if ($team->image)
                                        <img src="{{ Storage::url($team->image) }}" alt="Team Image" style="width: 200px; height: auto;">
                                    @else
                                        No Image
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label class="fw-semibold">Description:</label>
                                </div>
                                <div class="col-lg-9">
                                    <p>{{ $team->description }}</p>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-start gap-2">
                                        <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary">
                                            <i class="feather feather-edit me-2"></i>
                                            Edit Team
                                        </a>
                                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="feather feather-trash-2 me-2"></i>
                                                Delete Team
                                            </button>
                                        </form>
                                        <a href="{{ route('teams.index') }}" class="btn btn-secondary">
                                            <i class="feather feather-arrow-left me-2"></i>
                                            Back to Teams
                                        </a>
                                    </div>
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
