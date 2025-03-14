<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard</title>

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

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
                    <div class="my-auto mb-2">
                        <h3 class="page-title mb-1">Admin Dashboard</h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                        <div class="mb-2">
                            <a href="{{url('admin/university/create-university')}}" class="btn btn-primary d-flex align-items-center me-3"><i
                                    class="ti ti-square-rounded-plus me-2"></i>Add New University</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert-message">
                            <div class="alert alert-success rounded-pill d-flex align-items-center justify-content-between border-success mb-4"
                                role="alert">
                                @if ($newApplications->isNotEmpty())
                                    <div class="d-flex align-items-center">
                                        <span class="me-1 avatar avatar-sm flex-shrink-0">
                                            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                                alt="Img" class="img-fluid rounded-circle">
                                        </span>
                                        <p> {{ Auth::user()->name }}, New Student Application Are Uploaded <strong
                                                class="mx-1">Please Check It</strong></p>
                                    </div>
                                @else
                                    <div class="d-flex align-items-center">
                                        <p class="text-center text-muted">You have no new notifications at this time.
                                        </p>
                                    </div>
                                @endif
                                <button type="button" class="btn-close p-0" data-bs-dismiss="alert"
                                    aria-label="Close"><span><i class="ti ti-x"></i></span></button>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="row">

                    <!-- Total Students -->
                    <div class="col-xxl-3 col-sm-6 d-flex">
                        <div class="card flex-fill animate-card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl bg-danger-transparent me-2 p-1">
                                        <img src="{{ url('assets/admin/img/student.svg') }}" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">{{$totalStudents}}</h2>
                                            <span class="badge bg-danger">{{$studentsPercentageChange}}%</span>
                                        </div>
                                        <p>Total Students</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">{{$totalStudents}}</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Students -->

                    <!-- Total Teachers -->
                    <div class="col-xxl-3 col-sm-6 d-flex">
                        <div class="card flex-fill animate-card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2 bg-secondary-transparent p-1">
                                        <img src="{{ url('assets/admin/img/university.svg') }}" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">{{$totalUniversity}}</h2>
                                            <span class="badge bg-skyblue">{{$universityPercentageChange}}%</span>
                                        </div>
                                        <p>Total University</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">{{$totalUniversity}}</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Teachers -->

                    <!-- Total Staff -->
                    <div class="col-xxl-3 col-sm-6 d-flex">
                        <div class="card flex-fill animate-card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2 bg-warning-transparent p-1">
                                        <img src="{{ url('assets/admin/img/course.svg') }}" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">{{$totalCourses}}</h2>
                                            <span class="badge bg-warning">{{$coursesPercentageChange}}%</span>
                                        </div>
                                        <p>Total Courses</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">{{$totalCourses}}</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Staff -->

                    <!-- Total Subjects -->
                    <div class="col-xxl-3 col-sm-6 d-flex">
                        <div class="card flex-fill animate-card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2 bg-success-transparent p-1">
                                        <img src="{{ url('assets/admin/img/application.svg') }}" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">{{$totalApplications}}</h2>
                                            <span class="badge bg-success">{{$applicationsPercentageChange}}%</span>
                                        </div>
                                        <p>Total Applications</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">{{$totalApplications}}</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Subjects -->

                </div>



                









            </div>

        </div>
        <!-- /Page Wrapper -->





    </div>
    <!-- /Main Wrapper -->

    @include('admin.layout.footer')


</body>

</html>
