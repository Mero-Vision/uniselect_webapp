<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Recommended Courses</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @include('students.layouts.header')

</head>

<body>
    <div class="wrapper">
        @include('students.layouts.top_nav')
        @include('students.layouts.nav')
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header text-white d-print-none">
                    <div class="row align-items-center">

                        <div class="row">
                            <div class="col d-flex align-items-center justify-content-between flex-wrap">
                                <!-- Page Title -->
                                <h2 class="page-title me-3 mb-0">Recommended Courses</h2>


                                {{-- <form action="guardians.html" class="d-flex align-items-center">
                                   
                                    <div class="d-flex align-items-center me-3">
                                        <h4 class="mb-0">Filter</h4>
                                    </div>
                            
                                    
                                    <div class="d-flex align-items-center flex-wrap me-3">
                                       
                                        <div class="me-3 d-flex align-items-center">
                                            <label class="form-label mb-0 me-2">Name</label>
                                            <select class="form-select">
                                                <option>Select</option>
                                                <option>William</option>
                                                <option>Stacey</option>
                                                <option>George</option>
                                            </select>
                                        </div>                                      
                                    </div>
                            
                                   
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="btn btn-light me-2">Reset</a>
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>
                                </form> --}}
                            </div>

                        </div>

                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    <div class="row mb-3">
                        @forelse ($recommendedCourses as $data)
                            <div class="col-sm-6 col-xl-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <!-- Course Image -->
                                            <div class="col-auto">
                                                <div class="course-image-wrapper"
                                                    style="width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                                    <img src="{{ $data->getFirstMediaUrl('course_image') }}"
                                                        alt="{{ $data->name }}" class="img-fluid"
                                                        style="width: 100%; height: 100%; object-fit: cover;">
                                                </div>
                                            </div>

                                            <!-- Course Details -->
                                            <div class="col">
                                                <!-- Course Name -->
                                                <div class="mb-2">
                                                    <a href="{{ url('student/university') }}/{{ $data->slug }}"
                                                        class="text-decoration-none">
                                                        <h3 class="h5 font-weight-bold text-dark mb-0">
                                                            {{ $data->name }}
                                                        </h3>
                                                    </a>
                                                </div>

                                                <!-- Program Level -->
                                                <div class="mb-2">
                                                    <span class="badge bg-primary text-white font-weight-normal">
                                                        Program Level: {{ $data->program_level }}
                                                    </span>
                                                </div>

                                                <!-- Course Description -->
                                                <div class="text-muted mb-2">
                                                    {{ Str::limit(strip_tags($data->description), 100, '...') }}
                                                </div>

                                                <!-- Call-to-Action Button -->
                                                <div>
                                                    @if (in_array($data->id, $appliedCourses))
                                                        <button class="btn btn-success btn-sm" disabled>Applied</button>
                                                    @else
                                                        <form action="{{ url('student/applications') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $data->university_id }}"
                                                                name="university_id" />
                                                            <input type="hidden" value="{{ $data->id }}"
                                                                name="course_id" />
                                                            <button type="submit"
                                                                class="btn btn-outline-primary btn-sm bg-primary text-light">
                                                                Apply Course
                                                            </button>
                                                        </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <div>
                                <img src="{{ url('assets/admin/img/no-data.png') }}" class="img-fluid d-block mx-auto"
                                    style="width: 200px" />
                                <p class="text-center">No Recommendation Found!</p>
                                <p class="text-center text-danger">{{ $warningMessage }}</p>

                            </div>
                        @endforelse




                    </div>


                </div>


            </div>
        </div>
    </div>


    <script src="{{ url('assets/students/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/students/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/students/js/tabler.min.js') }}"></script>
    <script src="{{ url('assets/students/js/demo.min.js') }}"></script>




</body>

</html>
