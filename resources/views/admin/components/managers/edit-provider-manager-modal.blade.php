<!--! ================================================================ !-->
    <!--! [Start] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    @foreach($managers as $manager)
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="managerEditProviderOffcanvas{{$manager->id}}">

        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">Edit manager</h2>
                </a>
            </div>
        </div>        
        <form action="{{ route('managers.update',$manager->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="offcanvas-body">
                <div class="row">
                 <input type="hidden" name="forGetId" id="forGetId">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="manager_name" class="form-label">Manager Name:</label>
                            <input type="text" class="form-control" id="manager_name" name="manager_name" value="{{ $manager->user->name }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="manager_email" class="form-label">Manager Email:</label>
                            <input type="email" class="form-control" id="manager_email" name="manager_email" value="{{$manager->user->email}}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="manager_password" class="form-label">Manager Password (leave blank if unchanged):</label>
                            <input type="password" class="form-control" id="manager_password" name="manager_password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="role" class="form-label">Role:</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{$manager->user->role}}" required>
                        </div>
                    </div>
                </div>
                
                <div class="comments">
                    <div class="pt-4">
                        <button href="javascript:void(0);" class="btn btn-primary d-inline-block mt-4">Add Manager</button>
                    </div>
                </div>
                <!--! END: Comments !-->
            </div>
        </form>

    </div>
     @endforeach
    <!--! ================================================================ !-->
    <!--! [End] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->