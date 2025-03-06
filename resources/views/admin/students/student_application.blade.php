<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Student Applications</title>

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
                        <h3 class="page-title mb-1">Student Applications </h3>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">Applications </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                        <div class="pe-1 mb-2">
                            <a href="{{ url('admin/student-applications') }}" class="btn btn-outline-light bg-white btn-icon me-1"
                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                                data-bs-original-title="Refresh">
                                <i class="ti ti-refresh"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Applications List -->
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap pb-0">
                        <h4 class="mb-3">Application List</h4>

                    </div>
                    <div class="card-body p-0 py-3">

                        <!-- Applications List -->
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>

                                        <th>ID</th>
                                        <th>Student Name</th>
                                        <th>University</th>
                                        <th>Course</th>
                                        <th>Application Status</th>
                                        <th>Document Status</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applications as $data)
                                        <tr>

                                            <td><a href="" class="link-primary">{{ $data->id }}</a></td>
                                            <td>{{ $data->student->name }}</td>
                                            <td>{{ $data->university->name }}</td>
                                            <td>{{ $data->course->name }}</td>
                                            <td>
                                                <span
                                                    class="badge 
                                                {{ $data->application_status == 'pending' ? 'bg-danger' : '' }}
                                                {{ $data->application_status == 'approved' ? 'bg-success' : '' }}">
                                                    {{ ucfirst($data->application_status) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge 
                                                {{ $data->document_status == 'pending' ? 'bg-danger' : '' }}
                                                {{ $data->document_status == 'submitted' ? 'bg-primary' : '' }}
                                                {{ $data->document_status == 'approved' ? 'bg-success' : '' }}">
                                                    {{ ucfirst($data->document_status) }}
                                                </span>
                                            </td>
                                            <td><a class="badge bg-success text-light">View</a></td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /Applications List -->
                    </div>
                </div>
                <!-- /Applications List -->

            </div>
        </div>
        <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->




    @include('admin.layout.footer')


</body>

</html>
