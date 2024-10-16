<?php 
$languages = App\Models\Language::all();
// Assuming $reviews is passed to the view
?>

@foreach($reviews as $review)
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
                <!-- Rating / Scoro -->
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Rating / Scoro:</label>
                        <input type="number" name="scoro" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" value="{{ $review->scoro }}" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Review Description:</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter your review" required>{{ $review->description }}</textarea>
                    </div>
                </div>

                <!-- Review Source -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Review Source:</label>
                        <input type="text" name="review_source" class="form-control" placeholder="Enter source of review" value="{{ $review->review_source }}" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Client name:</label>
                        <input type="hidden" readonly value="{{ $review->client->id}}" name="client_id">
                        <input type="text" disabled name="some" class="form-control" placeholder="Enter source of review" value="{{ $review->client->name }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Status:</label>
                        <input type="text" disabled disabled name="status" class="form-control" placeholder="Enter source of review" value="{{ $review->status }}" required>
                    </div>
                </div>
                <!-- Hidden Provider ID -->
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
