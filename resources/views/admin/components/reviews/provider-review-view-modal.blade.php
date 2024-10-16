@foreach($reviews  as $review)
<!-- Review Details Offcanvas -->
<div class="offcanvas offcanvas-end w-50" tabindex="-1" id="reviewDetailsOffcanvas{{ $review->id }}">
    <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="d-flex align-items-center">
            <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close"><i class="feather-arrow-left"></i></div>
            <span class="vr text-muted mx-4"></span>
            <h2 class="fs-14 fw-bold text-truncate-1-line">Review Details</h2>
        </div>
    </div>        
    
     <div class="offcanvas-body">
        <div class="row">
            <!-- Rating -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Rating:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->rating }}</p>
                </div>
            </div>

            <!-- Description Summary -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Description Summary:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->description_summary }}</p>
                </div>
            </div>

            <!-- Origin -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Origin:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->origin }}</p>
                </div>
            </div>

            <!-- User Full Name -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">User Full Name:</label>
                    <p class="form-control-plaintext"  style="color:white;">{{ $review->user_full_name }}</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Email:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->email }}</p>
                </div>
            </div>

            <!-- User Job Title -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">User Job Title:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->user_job_title }}</p>
                </div>
            </div>

            <!-- User Company Name -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">User Company Name:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->user_company_name }}</p>
                </div>
            </div>

            <!-- Company Industry -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Company Industry:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->company_industry }}</p>
                </div>
            </div>

            <!-- Company Size -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Company Size:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->company_size }}</p>
                </div>
            </div>

            <!-- Providing Service -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Providing Service:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->providing_service }}</p>
                </div>
            </div>

            <!-- Language -->
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label class="form-label">Language:</label>
                    <p class="form-control-plaintext" style="color:white;">{{ $review->language->name }}</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endforeach

