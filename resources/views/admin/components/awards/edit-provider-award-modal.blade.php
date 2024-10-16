<!--! ================================================================ !-->
<!--! [Start] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
 @foreach($awards as $award)

<div class="offcanvas offcanvas-end w-50" tabindex="-1" id="awardEditProviderOffcanvas{{$award->id}}">
    <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
        <div class="d-flex align-items-center">
            <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
            <span class="vr text-muted mx-4"></span>
            <a href="javascript:void(0);">
                <h2 class="fs-14 fw-bold text-truncate-1-line">Edit Awards</h2>
            </a>
        </div>
        
    </div>
        <form action="{{ route('awards.update',$award->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="offcanvas-body">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="awardName" class="form-label">Award name</label>
                            <input id="awardName" class="form-control datepicker-input" name="name" placeholder="Enter your award name here..." value="{{ old('name', $award->name) }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="awardName" class="form-label">Category (Optional)</label>
                            <select id="category" name="category_id"  class="form-control">
                               @foreach($categories as $category)
                                 <option value="{{$category->id}}"  {{ $category->id == old('category_id', $award->category_id) ? 'selected' : '' }}>
                                       {{ $category->name }}
                                 </option>
                               @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="awardName" class="form-label">Date</label>
                            <input type="month" id="awardName" name="date" class="form-control datepicker-input" value="{{ old('date', $award->date) }}">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label class="form-label">Link to an existing work (Optional):</label>
                                <select id="link" name="link" class="form-select form-control">
                                        <option value="low" {{ old('link', $award->link) == 'low' ? 'selected' : '' }} data-bg="bg-primary">Low</option>
                                        <option value="normal" {{ old('link', $award->link) == 'normal' ? 'selected' : '' }} data-bg="bg-teal">Normal</option>
                                        <option value="medium" {{ old('link', $award->link) == 'medium' ? 'selected' : '' }} data-bg="bg-success">Medium</option>
                                        <option value="high" {{ old('link', $award->link) == 'high' ? 'selected' : '' }} data-bg="bg-warning">High</option>
                                        <option value="urgent" {{ old('link', $award->link) == 'urgent' ? 'selected' : '' }} data-bg="bg-danger">Urgent</option>
                                </select>
                        </div>
                    </div>
                      <input type="hidden" name="provider_id" value="{{ auth()->user()->manager->provider_id }}">
                      <button type="submit" class="btn btn-primary">Update</button>
                </div>
                
            </div>
        </form>
</div>

 @endforeach
<!--! ================================================================ !-->
<!--! [End] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->