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
                        <label class="form-label">Burget scoro:</label>
                        <input type="number" name="burget_score" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" value="{{ $review->burget_score }}" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Quality scoro:</label>
                        <input type="number" name="quality_score" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" value="{{ $review->quality_score }}" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Schedule scoro:</label>
                        <input type="number" name="schedule_score" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" value="{{ $review->schedule_score }}" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Colloboration scoro:</label>
                        <input type="number" name="colloboration_score" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" value="{{ $review->colloboration_score }}" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Behind Description:</label>
                        <textarea name="behind_collaboration" class="form-control" rows="3" placeholder="Enter your review" required>{{ $review->behind_collaboration }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">During Description:</label>
                        <textarea name="during_collaboration" class="form-control" rows="3" placeholder="Enter your review" required>{{ $review->during_collaboration }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Improvements Description:</label>
                        <textarea name="improvements" class="form-control" rows="3" placeholder="Enter your review" required>{{ $review->improvements }}</textarea>
                    </div>
                </div>

                <!-- Review Source -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Tavsiya qilasizmi?</label><br>

                        <input type="radio" id="recommend_yes" name="recommend" value="yes" {{ $review->recommend == 'yes' ? 'checked' : '' }}>
                        <label for="recommend_yes">Ha</label><br>

                        <input type="radio" id="recommend_no" name="recommend" value="no" {{ $review->recommend == 'no' ? 'checked' : '' }}>
                        <label for="recommend_no">Yo'q</label><br>
                    </div>
                </div>

                <!-- names -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">full_name:</label>
                        <input type="text" name="full_name" class="form-control" placeholder=""  value="{{ $review->full_name }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">email:</label>
                        <input type="text" name="email" class="form-control" placeholder=""  value="{{ $review->email }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">job_title:</label>
                        <input type="text" name="job_title" class="form-control" placeholder=""  value="{{ $review->job_title }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">company_name:</label>
                        <input type="text" name="company_name" class="form-control" placeholder=""  value="{{ $review->company_name }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">company_industry:</label>
                        <input type="text" name="company_industry" class="form-control" placeholder=""  value="{{ $review->company_industry }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">company size:</label>
                        <input type="text" name="company_size" class="form-control" placeholder=""  value="{{ $review->company_size }}" required>
                    </div>
                </div>

                <!-- service category -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label for="service_category_id" class="form-label">Xizmat Kategoriyasi:</label>
                        <select name="service_category_id" id="service_category_id" class="form-control" required>
                            <option value="">Tanlang</option>
                            @foreach($service_categories as $category)
                                <option value="{{ $category->id }}" {{ isset($review) && $review->service_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Status -->


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
