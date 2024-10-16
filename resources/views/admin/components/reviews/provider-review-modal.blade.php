<?php 
$languages = App\Models\Language::all();

?>
<form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <!--! ================================================================ !-->
    <!--! [Start] Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="reviewProviderOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <!-- Rating -->
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Rating:</label>
                        <input type="number" name="rating" class="form-control" placeholder="Enter rating" min="1" max="5" required>
                    </div>
                </div>

                <!-- Description Summary -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Description Summary:</label>
                        <textarea name="description_summary" class="form-control" rows="3" placeholder="Enter description summary" required></textarea>
                    </div>
                </div>

                <!-- Origin -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Origin:</label>
                        <input type="text" name="origin" class="form-control" placeholder="Enter origin" required>
                    </div>
                </div>

                <!-- User Full Name -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">User Full Name:</label>
                        <input type="text" name="user_full_name" class="form-control" placeholder="Enter full name" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <!-- User Job Title -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">User Job Title:</label>
                        <input type="text" name="user_job_title" class="form-control" placeholder="Enter job title">
                    </div>
                </div>

                <!-- User Company Name -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">User Company Name:</label>
                        <input type="text" name="user_company_name" class="form-control" placeholder="Enter company name">
                    </div>
                </div>

                <!-- Company Industry -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Company Industry:</label>
                        <input type="text" name="company_industry" class="form-control" placeholder="Enter industry">
                    </div>
                </div>

                <!-- Company Size -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Company Size:</label>
                        <input type="text" name="company_size" class="form-control" placeholder="Enter company size">
                    </div>
                </div>

                <!-- Providing Service -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Providing Service:</label>
                        <input type="text" name="providing_service" class="form-control" placeholder="Enter providing service">
                    </div>
                </div>

                <!-- Language -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Language:</label>
                        <select name="language_id" class="form-control" required>
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <input type="hidden" name="provider_id" value="{{ auth()->user()->manager->provider_id}}">

                <!-- Submit Button -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary">Save Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
</form>
