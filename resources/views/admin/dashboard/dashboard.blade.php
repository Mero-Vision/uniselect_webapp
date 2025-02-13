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
                            <a href="add-student.html" class="btn btn-primary d-flex align-items-center me-3"><i
                                    class="ti ti-square-rounded-plus me-2"></i>Add New Student</a>
                        </div>
                        <div class="mb-2">
                            <a href="collect-fees.html" class="btn btn-light d-flex align-items-center">Fees
                                Details</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert-message">
                            <div class="alert alert-success rounded-pill d-flex align-items-center justify-content-between border-success mb-4"
                                role="alert">
                                <div class="d-flex align-items-center">
                                    <span class="me-1 avatar avatar-sm flex-shrink-0"><img
                                            src="assets/img/profiles/avatar-27.jpg" alt="Img"
                                            class="img-fluid rounded-circle"></span>
                                    <p>Fahed III,C has paid Fees for the <strong class="mx-1">“Term1”</strong></p>
                                </div>
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
                                        <img src="assets/img/icons/student.svg" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">3654</h2>
                                            <span class="badge bg-danger">1.2%</span>
                                        </div>
                                        <p>Total Students</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">3643</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">11</span></p>
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
                                        <img src="assets/img/icons/teacher.svg" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">284</h2>
                                            <span class="badge bg-skyblue">1.2%</span>
                                        </div>
                                        <p>Total Teachers</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">254</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">30</span></p>
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
                                        <img src="assets/img/icons/staff.svg" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">162</h2>
                                            <span class="badge bg-warning">1.2%</span>
                                        </div>
                                        <p>Total Staff</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">161</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">02</span></p>
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
                                        <img src="assets/img/icons/subject.svg" alt="img">
                                    </div>
                                    <div class="overflow-hidden flex-fill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="counter">82</h2>
                                            <span class="badge bg-success">1.2%</span>
                                        </div>
                                        <p>Total Subjects</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
                                    <p class="mb-0">Active : <span class="text-dark fw-semibold">81</span></p>
                                    <span class="text-light">|</span>
                                    <p>Inactive : <span class="text-dark fw-semibold">01</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Subjects -->

                </div>



                <div class="row">

                    <!-- Links -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <a href="student-attendance.html"
                            class="card bg-warning-transparent border border-5 border-white animate-card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-warning rounded flex-shrink-0 me-2"><i
                                                class="ti ti-calendar-share fs-24"></i></span>
                                        <div class="overflow-hidden">
                                            <h6 class="fw-semibold text-default">View Attendance</h6>
                                        </div>
                                    </div>
                                    <span
                                        class="btn btn-white warning-btn-hover avatar avatar-sm p-0 flex-shrink-0 rounded-circle"><i
                                            class="ti ti-chevron-right fs-14"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /Links -->

                    <!-- Links -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <a href="events.html"
                            class="card bg-success-transparent border border-5 border-white animate-card flex-fill ">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-success rounded flex-shrink-0 me-2"><i
                                                class="ti ti-speakerphone fs-24"></i></span>
                                        <div class="overflow-hidden">
                                            <h6 class="fw-semibold text-default">New Events</h6>
                                        </div>
                                    </div>
                                    <span
                                        class="btn btn-white success-btn-hover avatar avatar-sm p-0 flex-shrink-0 rounded-circle"><i
                                            class="ti ti-chevron-right fs-14"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /Links -->

                    <!-- Links -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <a href="membership-plans.html"
                            class="card bg-danger-transparent border border-5 border-white animate-card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-danger rounded flex-shrink-0 me-2"><i
                                                class="ti ti-sphere fs-24"></i></span>
                                        <div class="overflow-hidden">
                                            <h6 class="fw-semibold text-default">Membership Plans</h6>
                                        </div>
                                    </div>
                                    <span
                                        class="btn btn-white avatar avatar-sm p-0 flex-shrink-0 rounded-circle danger-btn-hover"><i
                                            class="ti ti-chevron-right fs-14"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /Links -->

                    <!-- Links -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <a href="student-attendance.html"
                            class="card bg-secondary-transparent border border-5 border-white animate-card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-secondary rounded flex-shrink-0 me-2"><i
                                                class="ti ti-moneybag fs-24"></i></span>
                                        <div class="overflow-hidden">
                                            <h6 class="fw-semibold text-default">Finance & Accounts</h6>
                                        </div>
                                    </div>
                                    <span
                                        class="btn btn-white secondary-btn-hover avatar avatar-sm p-0 flex-shrink-0 rounded-circle"><i
                                            class="ti ti-chevron-right fs-14"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /Links -->

                </div>


            </div>

        </div>
        <!-- /Page Wrapper -->

        <!-- Add Class Routine -->
        <div class="modal fade" id="add_class_routine">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-wrapper">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Class Routine</h4>
                            <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        <form action="index.html">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Teacher</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Erickson</option>
                                                <option>Mori</option>
                                                <option>Joseph</option>
                                                <option>James</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Class</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>I</option>
                                                <option>II</option>
                                                <option>III</option>
                                                <option>IV</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Section</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Day</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wedneshday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Start Time</label>
                                                    <div class="date-pic">
                                                        <input type="text" class="form-control timepicker"
                                                            placeholder="Choose">
                                                        <span class="cal-icon"><i class="ti ti-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">End Time</label>
                                                    <div class="date-pic">
                                                        <input type="text" class="form-control timepicker"
                                                            placeholder="Choose">
                                                        <span class="cal-icon"><i class="ti ti-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Class Room</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>101</option>
                                                <option>102</option>
                                                <option>103</option>
                                                <option>104</option>
                                                <option>105</option>
                                            </select>
                                        </div>
                                        <div
                                            class="modal-satus-toggle d-flex align-items-center justify-content-between">
                                            <div class="status-title">
                                                <h5>Status</h5>
                                                <p>Change the Status by toggle </p>
                                            </div>
                                            <div class="status-toggle modal-status">
                                                <input type="checkbox" id="user1" class="check">
                                                <label for="user1" class="checktoggle"> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" class="btn btn-primary">Add Class Routine</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Class Routine -->

        

    </div>
    <!-- /Main Wrapper -->

    @include('admin.layout.footer')


</body>

</html>
