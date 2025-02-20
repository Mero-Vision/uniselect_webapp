<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Company Settings</title>

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
                        <h3 class="page-title mb-1">Company Settings</h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Settings</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Company Settings</li>
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
                <div class="row">
                    <div class="col-xxl-2 col-xl-3">
                        @include('admin.settings.setting_nav')
                    </div>
                    <div class="col-xxl-10 col-xl-9">
                        <div class="flex-fill border-start ps-3">
                            <form action="{{ url('admin/site-setting') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div
                                    class="d-flex align-items-center justify-content-between flex-wrap border-bottom pt-3 mb-3">
                                    <div class="mb-3">
                                        <h5>Company Settings</h5>
                                        <p>Provide your company information</p>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                                <div class="d-md-flex d-block">
                                    <div class="flex-fill">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Company Information</h5>
                                            </div>
                                            <div class="card-body pb-1">
                                                <div class="d-block d-xl-flex">
                                                    <div class="mb-3 flex-fill me-xl-3 me-0">
                                                        <label class="form-label">Company Name</label>

                                                        @if (isset($data['consultancy_name']))
                                                            <input type="text" class="form-control"
                                                                name="consultancy_name"
                                                                value="{{ $data['consultancy_name'] }}">
                                                        @else
                                                            <input type="text" class="form-control"
                                                                name="consultancy_name"
                                                                placeholder="Enter Company Name">
                                                        @endif

                                                    </div>
                                                    <div class="mb-3 flex-fill">
                                                        <label class="form-label">Phone Number</label>
                                                        @if (isset($data['phone']))
                                                            <input type="text" class="form-control" name="phone"
                                                                value="{{ $data['phone'] }}">
                                                        @else
                                                            <input type="text" class="form-control" name="phone"
                                                                placeholder="Enter Phone No">
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="d-block d-xl-flex">
                                                    <div class="mb-3 flex-fill me-xl-3 me-0">
                                                        <label class="form-label">Email</label>
                                                        @if (isset($data['email']))
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ $data['email'] }}">
                                                        @else
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter Email">
                                                        @endif
                                                    </div>
                                                    <div class="mb-3 flex-fill">
                                                        <label class="form-label">Website</label>
                                                        @if (isset($data['website']))
                                                            <input type="text" class="form-control" name="website"
                                                                value="{{ $data['website'] }}">
                                                        @else
                                                            <input type="text" class="form-control" name="website"
                                                                placeholder="Enter Website URL">
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="d-block d-xl-flex">
                                                    <div class="mb-3 flex-fill me-xl-3 me-0">
                                                        <label class="form-label">Registration Number</label>
                                                        @if (isset($data['registration_number']))
                                                            <input type="text" class="form-control"
                                                                name="registration_number"
                                                                value="{{ $data['registration_number'] }}">
                                                        @else
                                                            <input type="text" class="form-control"
                                                                name="registration_number"
                                                                placeholder="Enter Company Registration No">
                                                        @endif
                                                    </div>
                                                    <div class="mb-3 flex-fill">
                                                        <label class="form-label">Website</label>
                                                        @if (isset($data['website']))
                                                            <input type="text" class="form-control" name="website"
                                                                value="{{ $data['website'] }}">
                                                        @else
                                                            <input type="text" class="form-control" name="website"
                                                                placeholder="Enter Website URL">
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="d-block d-xl-flex">
                                                    <div class="mb-3 flex-fill me-xl-3 me-0">
                                                        <label class="form-label">Address</label>
                                                        @if (isset($data['address']))
                                                            <input type="text" class="form-control" name="address"
                                                                value="{{ $data['address'] }}">
                                                        @else
                                                            <input type="text" class="form-control" name="address"
                                                                placeholder="Enter Address">
                                                        @endif
                                                    </div>
                                                    <div class="mb-3 flex-fill">
                                                        <label class="form-label">Country</label>
                                                        @if (isset($data['country']))
                                                            <input type="text" class="form-control" name="country"
                                                                value="{{ $data['country'] }}">
                                                        @else
                                                            <input type="text" class="form-control" name="country"
                                                                placeholder="Enter Country">
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="d-block d-xl-flex">
                                                    <div class="mb-3 flex-fill me-xl-3 me-0">
                                                        <label class="form-label">Established At</label>
                                                        @if (isset($data['established_at']))
                                                            <input type="date" class="form-control"
                                                                name="established_at"
                                                                value="{{ $data['established_at'] }}">
                                                        @else
                                                            <input type="date" class="form-control"
                                                                name="established_at"
                                                                placeholder="Enter Established Date">
                                                        @endif
                                                    </div>

                                                    

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                    <div class="settings-right-sidebar ms-md-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Company Images</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="border-bottom mb-3 pb-3">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span
                                                                class="avatar avatar-xl border rounded d-flex align-items-center justify-content-center p-2 me-2"><img
                                                                    src="{{ isset($data['logo']) ? $data['logo'] : asset('default-logo.png') }}"
                                                                    alt="Company Logo" class="img-fluid"></span>
                                                            <h5>Logo</h5>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            {{-- <a href="javascript:void(0);"
                                                                class="text-primary border rounded fs-16 p-1 badge badge-primary-hover me-2"><i
                                                                    class="ti ti-edit-circle"></i></a> --}}
                                                            {{-- <a href="javascript:void(0);"
                                                                class="text-danger border rounded fs-16 p-1 badge badge-danger-hover"><i
                                                                    class="ti ti-trash-x"></i></a> --}}
                                                        </div>
                                                    </div>
                                                    <div class="profile-uploader profile-uploader-two mb-0">
                                                        <span class="d-block text-center lh-1 fs-24 mb-1"><i
                                                                class="ti ti-upload"></i></span>
                                                        <div class="drag-upload-btn bg-transparent me-0 border-0">
                                                            <p class="fs-12 mb-2"><span class="text-primary">Click to
                                                                    Upload</span> or drag and drop
                                                            </p>
                                                            <h6>JPG or PNG</h6>
                                                            <h6>(Max 450 x 450 px)</h6>
                                                        </div>
                                                        <input type="file" class="form-control image-sign"
                                                            name="logo">
                                                        <div class="frames"></div>
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
        </div>
        <!-- /Page Wrapper -->





    </div>
    <!-- /Main Wrapper -->




    @include('admin.layout.footer')


</body>

</html>
