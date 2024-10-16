<!--! ================================================================ !-->
<!--! [Start] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
<div class="offcanvas offcanvas-end w-50" tabindex="-1" id="awardViewProviderOffcanvas">
    <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
        <div class="d-flex align-items-center">
            <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
            <span class="vr text-muted mx-4"></span>
            <a href="javascript:void(0);">
                <h2 class="fs-14 fw-bold text-truncate-1-line">title Awards</h2>
            </a>
        </div>
        
    </div>
    <div class="offcanvas-body">
        <div class="row">

            <div class="col-sm-6">
                <div class="form-group mb-4">
                    <label for="awardName" class="form-label">Award name</label>
                    <input id="awardName" class="form-control datepicker-input" placeholder="Enter your award name here...">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group mb-4">
                    <label for="awardName" class="form-label">Category (Optional)</label>
                    <input type="text" id="awardName" class="form-control datepicker-input" placeholder="Enter your award category here...">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group mb-4">
                    <label for="awardName" class="form-label">Date</label>
                    <input type="month" id="awardName" class="form-control datepicker-input">
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="form-group mb-4">
                    <label class="form-label">Link to an existing work (Optional):</label>
                    <select class="form-select form-control" data-select2-selector="priority">
                        <option value="primary" data-bg="bg-primary">Low</option>
                        <option value="teal" data-bg="bg-teal">Normal</option>
                        <option value="success" data-bg="bg-success">Medium</option>
                        <option value="warning" data-bg="bg-warning" selected>High</option>
                        <option value="danger" data-bg="bg-danger">Urgent</option>
                    </select>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
<!--! ================================================================ !-->
<!--! [End] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->