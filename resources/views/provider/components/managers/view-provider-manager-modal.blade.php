<!--! ================================================================ !-->
    <!--! [Start] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="managerViewProviderOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">View Manager</h2>
                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">09:00am - 11:00am, Rangpur, Bangladesh.</span>
                </a>
            </div>
            <div class="d-none d-md-flex gap-1 align-items-center justify-content-center">
                <a href="javascript:void(0);" class="d-none d-lg-flex align-items-center fs-9 fw-bold text-uppercase text-dark py-2 px-3 border border-gray-2 rounded">
                    <i class="feather-link-2 me-2"></i>
                    <span class="text-nowrap">Copy Link</span>
                </a>
                <a href="javascript:void(0)" class="d-flex">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Contractors"><i class="feather-plus"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Remainder Notify"><i class="feather-bell"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Favorite"><i class="feather-star"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Calendar"><i class="feather-calendar"></i></div>
                </a>
                <div class="dropdown d-none d-sm-block">
                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,25">
                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                            <i class="feather-more-vertical"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye-off me-3"></i>
                                <span>Make Unread</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-sliders me-3"></i>
                                <span>Filter Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-archive me-3"></i>
                                <span>Make as Archive</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-link-2 me-3"></i>
                                <span>Attach files</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-calendar me-3"></i>
                                <span>Set Due Date</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye me-3"></i>
                                <span>Follow Task</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bookmark me-3"></i>
                                <span>Apply Labels</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-alert-triangle me-3"></i>
                                <span>Report Spam</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-alert-octagon me-3"></i>
                                <span>Report phishing</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bell-off me-3"></i>
                                <span>Mute Conversion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-slash me-3"></i>
                                <span>Block Conversion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-trash-2 me-3"></i>
                                <span>Delete Conversion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="{{ route('managers.store')}}" method="POST">
            @csrf
            <div class="offcanvas-body">
                <div class="row">
                    <div class="col-12">
                        <div id="taskDateRange">
                            <label class="form-label">Manager Name:</label>
                            <div class="input-group date input-daterange">
                                <input type="text"  class="form-control" name="manager_name" placeholder="Write Provider Name" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="taskDateRange">
                            <label class="form-label">Manager Email:</label>
                            <div class="input-group date input-daterange">
                                <input type="text"  class="form-control" name="manager_email" placeholder="Write Provider Email" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="taskDateRange">
                            <label class="form-label">Manager Password:</label>
                            <div class="input-group date input-daterange">
                                <input type="password"  class="form-control" name="manager_password" placeholder="Write Provider Email" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="role" value="admin">
                <div class="comments">
                    <div class="pt-4">
                        <button href="javascript:void(0);" class="btn btn-primary d-inline-block mt-4">Add Manager</button>
                    </div>
                </div>
                <!--! END: Comments !-->
            </div>
        </form>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->