<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>University Courses</title>

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
            <div class="content content-two">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
                    <div class="my-auto mb-2">
                        <h3 class="page-title mb-1">Courses </h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    University
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Courses </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                        <div class="pe-1 mb-2">
                            <a href="{{ url('admin/courses') }}" class="btn btn-outline-light bg-white btn-icon me-1"
                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                                data-bs-original-title="Refresh">
                                <i class="ti ti-refresh"></i>
                            </a>
                        </div>

                        <div class="mb-2">
                            <a href="{{ url('admin/courses/create-course') }}"
                                class="btn btn-primary d-flex align-items-center"><i
                                    class="ti ti-square-rounded-plus me-2"></i>Add Course</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div
                    class="bg-white p-3 border rounded-1 d-flex align-items-center justify-content-between flex-wrap mb-4 pb-0">
                    <h4 class="mb-3">All Courses</h4>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="input-icon-start mb-3 me-2 position-relative">
                            <span class="icon-addon">
                                <i class="ti ti-calendar"></i>
                            </span>
                            <input type="text" class="form-control date-range bookingrange" placeholder="Select"
                                value="Academic Year : 2024 / 2025">
                        </div>
                        <div class="dropdown mb-3 me-2">
                            <a href="javascript:void(0);" class="btn btn-outline-light bg-white dropdown-toggle"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
                                    class="ti ti-filter me-2"></i>Filter</a>
                            <div class="dropdown-menu drop-width">
                                <form action="guardians.html">
                                    <div class="d-flex align-items-center border-bottom p-3">
                                        <h4>Filter</h4>
                                    </div>
                                    <div class="p-3 pb-0 border-bottom">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>William</option>
                                                        <option>Stacey</option>
                                                        <option>George</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Class</label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>III A</option>
                                                        <option>II (A)</option>
                                                        <option>VI (A)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 d-flex align-items-center justify-content-end">
                                        <a href="#" class="btn btn-light me-3">Reset</a>
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white border rounded-2 p-1 mb-3 me-2">

                            <a href="teacher-grid.html" class=" active btn btn-icon btn-sm  primary-hover"><i
                                    class="ti ti-grid-dots"></i></a>
                        </div>
                        <div class="dropdown mb-3">
                            <a href="javascript:void(0);" class="btn btn-outline-light bg-white dropdown-toggle"
                                data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort by A-Z </a>
                            <ul class="dropdown-menu p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1 active">
                                        Ascending
                                    </a>
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item rounded-1">
                                        Descending
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                        Recently Viewed
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                        Recently Added
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @forelse ($courses as $data)
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <a href="" class="link-primary">{{$data->university_id}}</a>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-success d-inline-flex align-items-center me-1"><i
                                                class="ti ti-circle-filled fs-5 me-1"></i>Active</span>
                                        <div class="dropdown">
                                            <a href="#"
                                                class="btn btn-white btn-icon btn-sm d-flex align-items-center justify-content-center rounded-circle p-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-14"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right p-3">
                                                <li>
                                                    <a class="dropdown-item rounded-1" href="edit-teacher.html"><i
                                                            class="ti ti-edit-circle me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded-1" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#delete-modal"><i
                                                            class="ti ti-trash-x me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bg-light-300 rounded-2 p-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <a href="" class="avatar avatar-lg flex-shrink-0"><img
                                                    src="{{$data->getFirstMediaUrl('course_image')}}"
                                                    class="img-fluid " alt="img"></a>
                                            <div class="ms-2">
                                                <h6 class="text-dark text-truncate mb-0"><a
                                                        href="">{{$data->name}}</a></h6>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="mb-0">Program Level</p>
                                            <p class="text-dark"><a
                                                    class="__cf_email__"
                                                    >{{$data->program_level}}</a>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="mb-0">Tuition Fees</p>
                                            <p class="text-dark">{{$data->tuition_fees}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   
                                    <a href="" class="btn btn-light btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div>
                        <img src="{{url('assets/admin/img/no-data.png')}}" class="img-fluid d-block mx-auto" style="width: 200px"/>
                        <p class="text-center">No Data Found!</p>
                    </div>
                    @endforelse

                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->




    @include('admin.layout.footer')


</body>

</html>
