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
                            <div class="col-sm-6 col-xl-3 mb-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="text-white" style="width: 450px">
                                                    <img src="{{ $data->getFirstMediaUrl('university_image') }}" />
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    <a
                                                        href="{{ url('student/university') }}/{{ $data->slug }}">{{ $data->name }}</a>
                                                </div>
                                                <div class="text-muted">
                                                    Country: {{ $data->country->name }} </div>
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
                                <p class="text-center text-danger">{{$warningMessage}}</p>

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
