<?php 
$languages = App\Models\Language::all();
// Assuming $reviewId is passed to the view
?>

@foreach($reviews  as $review)
<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!--! ================================================================ !-->
    <!--! [Start] Edit Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="editReviewProviderOffcanvas{{ $review->id }}">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <!-- Rating -->
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Rating:</label>
                        <input type="number" name="rating" class="form-control" placeholder="Enter rating" min="1" max="5" value="{{ $review->rating }}" required>
                    </div>
                </div>

                <!-- Description Summary -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Description Summary:</label>
                        <textarea name="description_summary" class="form-control" rows="3" placeholder="Enter description summary" required>{{ $review->description_summary }}</textarea>
                    </div>
                </div>

                <!-- Origin -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Origin:</label>
                        <input type="text" name="origin" class="form-control" placeholder="Enter origin" value="{{ $review->origin }}" required>
                    </div>
                </div>

                <!-- User Full Name -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">User Full Name:</label>
                        <input type="text" name="user_full_name" class="form-control" placeholder="Enter full name" value="{{ $review->user_full_name }}" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $review->email }}" required>
                    </div>
                </div>

                <!-- User Job Title -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">User Job Title:</label>
                        <input type="text" name="user_job_title" class="form-control" placeholder="Enter job title" value="{{ $review->user_job_title }}">
                    </div>
                </div>

                <!-- User Company Name -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">User Company Name:</label>
                        <input type="text" name="user_company_name" class="form-control" placeholder="Enter company name" value="{{ $review->user_company_name }}">
                    </div>
                </div>

                <!-- Company Industry -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Company Industry:</label>
                        <input type="text" name="company_industry" class="form-control" placeholder="Enter industry" value="{{ $review->company_industry }}">
                    </div>
                </div>

                <!-- Company Size -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Company Size:</label>
                        <input type="text" name="company_size" class="form-control" placeholder="Enter company size" value="{{ $review->company_size }}">
                    </div>
                </div>

                <!-- Providing Service -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Providing Service:</label>
                        <input type="text" name="providing_service" class="form-control" placeholder="Enter providing service" value="{{ $review->providing_service }}">
                    </div>
                </div>

                <!-- Language -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Language:</label>
                        <select name="language_id" class="form-control" required>
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}" {{ $review->language_id == $language->id ? 'selected' : '' }}>{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <input type="hidden" name="provider_id" value="{{ $review->provider_id }}">

                <!-- Submit Button -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary">Update Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Edit Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
</form>

@endforeach
