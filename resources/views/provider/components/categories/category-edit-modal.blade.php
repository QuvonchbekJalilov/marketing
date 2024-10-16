<style>
    .select2-selection__rendered .select2-selection__choice {
        width: max-content;
    }
</style>

@foreach($categories as $category)
    <!-- Modal for Editing Service -->
    <div class="offcanvas offcanvas-end w-50" id="editServiceModal{{ $category->id }}" tabindex="-1">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
                <h2 class="fs-14 fw-bold text-truncate-1-line">Edit Category</h2>
            </div>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Name (uz):</label>
                            <input class="form-control" name="name_uz" value="{{$category->name_uz}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Name (ru):</label>
                            <input class="form-control" name="name_ru" value="{{$category->name_ru}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Name (en):</label>
                            <input class="form-control" name="name_en" value="{{$category->name_en}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach

