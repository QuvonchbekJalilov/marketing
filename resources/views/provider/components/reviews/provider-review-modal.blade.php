<form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <!--! ================================================================ !-->
    <!--! [Start] Review Provider Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="reviewProviderOffcanvas">
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
                        <input type="number" name="scoro" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Review Description:</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter your review" required></textarea>
                    </div>
                </div>

                <!-- Review Source -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Review Source:</label>
                        <input type="text" name="review_source" class="form-control" placeholder="Enter source of review" required>
                    </div>
                </div>

                 <!-- Language -->
                 <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Client:</label>
                        <select name="client_id" class="form-control" required>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}" >{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Hidden Provider ID -->
                <input type="hidden" name="provider_id" value="{{ auth()->user()->id }}">

                <!-- Hidden Client ID (you might want to replace this if you want the client's ID) -->

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
