<style>
    .select2-selection__rendered .select2-selection__choice {
        width: max-content;
    }
</style>


<!--! ================================================================ !-->
<!--! [Start] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="serviceProviderOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas"
                     data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
                <h2 class="fs-14 fw-bold text-truncate-1-line">Create Category</h2>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Name (uz):</label>
                        <input class="form-control" name="name_uz">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Name (ru):</label>
                        <input class="form-control" name="name_ru">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Name (en):</label>
                        <input class="form-control" name="name_en">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<!--! ================================================================ !-->
<!--! [End] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
