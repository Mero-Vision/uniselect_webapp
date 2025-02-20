<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Profile</title>

    @include('admin.layout.header')

</head>

<body>

    <div id="global-loader">
        <div class="page-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('admin.layout.nav')

        @include('admin.layout.sidebar')

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content">
                <div class="d-md-flex d-block align-items-center justify-content-between border-bottom pb-3">
                    <div class="my-auto mb-2">
                        <h3 class="page-title mb-1">Profile</h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Settings</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                        <div class="pe-1 mb-2">
                            <a href="#" class="btn btn-outline-light bg-white btn-icon" data-bs-toggle="tooltip"
                                data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh">
                                <i class="ti ti-refresh"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex d-block mt-3">
                    <div class="settings-right-sidebar me-md-3 border-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>Personal Information</h5>

                            </div>
                            <div class="card-body">
                                <div class="settings-profile-upload">
                                    <span class="profile-pic">
                                        <img src="{{ url('assets/admin/img/avater.png') }}" alt="Profile">
                                    </span>
                                    <div class="title-upload">
                                        <h5>Edit Your Photo</h5>
                                        <a href="#" class="text-primary">Update</a>
                                    </div>
                                </div>
                                <div class="profile-uploader profile-uploader-two mb-0">
                                    <span class="upload-icon"><i class="ti ti-upload"></i></span>
                                    <div class="drag-upload-btn bg-transparent me-0 border-0">
                                        <p class="upload-btn"><span>Click to Upload</span> or drag and drop
                                        </p>
                                        <h6>JPG or PNG</h6>
                                        <h6>(Max 450 x 450 px)</h6>
                                    </div>
                                    <input type="file" class="form-control" multiple="" id="image_sign">
                                    <div id="frames"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-fill ps-0 border-0">
                        <form action="profile-settings.html">
                            <div class="d-md-flex">
                                <div class="flex-fill">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5>Personal Information</h5>
                                            {{-- <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#edit_personal_information"><i
                                                    class="ti ti-edit me-2"></i>Edit</a> --}}
                                        </div>
                                        <div class="card-body">
                                            <div class="d-block d-xl-flex">
                                                <div class="mb-3 flex-fill me-xl-3 me-0">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ Auth::user()->name }}" readonly>
                                                </div>
                                                <div class="mb-3 flex-fill">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" value="{{Auth::user()->email}}"
                                                        readonly>
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5>Password</h5>
                                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#change_password">Change</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 mb-3">
                                                <label class="form-label">Current Password</label>
                                                <div class="pass-group d-flex">
                                                    <input type="password" class="pass-input form-control" value="{{Auth::user()->password}}">
                                                    <span class="ti toggle-password ti-eye-off"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->





    </div>
    <!-- /Main Wrapper -->


    <!-- Change Password -->
    <div class="modal fade" id="change_password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <div class="pass-group d-flex">
                                        <input type="password" class="pass-input form-control">
                                        <span class="ti toggle-password ti-eye-off"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <div class="pass-group d-flex">
                                        <input type="password" class="pass-inputs form-control">
                                        <span class="ti toggle-passwords ti-eye-off"></span>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="pass-group d-flex">
                                        <input type="password" class="pass-inputa form-control">
                                        <span class="ti toggle-passworda ti-eye-off"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Change Password -->

    @include('admin.layout.footer')


</body>

</html>
