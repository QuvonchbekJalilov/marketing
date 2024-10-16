<style>
    .select2-selection__rendered .select2-selection__choice {
        width: max-content;
    }
</style>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@foreach($services as $service)
    <!-- Modal for Editing Service -->
    <div class="offcanvas offcanvas-end w-50" id="editServiceModal{{ $service->id }}" tabindex="-1">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
                <h2 class="fs-14 fw-bold text-truncate-1-line">Edit Service</h2>
            </div>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('services-admin.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Name (uz) -->
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Name (uz):</label>
                            <input class="form-control" name="name_uz" value="{{ $service->name_uz }}">
                        </div>
                    </div>

                    <!-- Name (ru) -->
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Name (ru):</label>
                            <input class="form-control" name="name_ru" value="{{ $service->name_ru }}">
                        </div>
                    </div>

                    <!-- Name (en) -->
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Name (en):</label>
                            <input class="form-control" name="name_en" value="{{ $service->name_en }}">
                        </div>
                    </div>

                    <!-- Category (Select2) -->
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Category:</label>
                            <select class="form-control select2" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name_en }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-submit">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endforeach

