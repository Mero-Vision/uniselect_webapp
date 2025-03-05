<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $course->name }}</title>
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

                        <div class="col d-flex align-items-center gap-3">
                            <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                            <h2 class="page-title m-0">{{ $course->name }}</h2>
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

                        <div class="col-12">
                            <div class="card">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-3 text-center text-sm-start">
                                        <img src="{{ $course->getFirstMediaUrl('course_image') }}"
                                            class="img-fluid rounded" style="max-width: 150px;" alt="course_image">
                                    </div>
                                    <div class="col-12 col-sm-9 text-center text-sm-start">
                                        <div class="row">
                                            <div class="col-6">
                                                <h4 class="">Course Name: {{ $course->name }}</h4>
                                            </div>
                                           
                                            <div class="col-6">
                                                <h4 class="">Program Level: {{ $course->program_level }}</h4>

                                            </div>
                                            <div class="col-6">
                                                <h4 class="">Course Duration: {{ $course->course_duration }}</h4>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="">Tuition Fees: {{ $course->tuition_fees }}</h4>
                                            </div>

                                            <div class="col-6">
                                                <h4 class="">Application Fees: {{ $course->application_fees }}</h4>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div><br>
                        <div class="col-md-3 mt-2">
                            <div class="card p-4">
                                <h3 class="text-center">IELTS </h3>
                                <p class="">Min Reading: {{$course->min_ielts_reading}}</p>
                                <p class="">Min Listening: {{$course->min_ielts_listening}}</p>
                                <p class="">Min Speaking: {{$course->min_ielts_speaking}}</p>
                                <p class="">Min Writing: {{$course->min_ielts_writing}}</p>


                            </div>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="card p-4">
                                <h3 class="text-center">PTE </h3>
                                <p class="">PTE Reading: {{$course->min_pte_reading}}</p>
                                <p class="">PTE Listening: {{$course->min_pte_listening}}</p>
                                <p class="">PTE Speaking: {{$course->min_pte_speaking}}</p>
                                <p class="">PTE Writing: {{$course->min_pte_writing}}</p>


                            </div>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="card p-4">
                                <h3 class="text-center">SAT </h3>
                                <p class="">SAT Reading: {{$course->min_sat_reading}}</p>
                                <p class="">SAT Listening: {{$course->min_sat_listening}}</p>
                                <p class="">SAT Speaking: {{$course->min_sat_speaking}}</p>
                                <p class="">SAT Writing: {{$course->min_sat_writing}}</p>


                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="card p-4">
                                <h3 class="text-center">TOEFL </h3>
                                <p class="">TOEFL Reading: {{$course->min_toefl_reading}}</p>
                                <p class="">TOEFL Listening: {{$course->min_toefl_listening}}</p>
                                <p class="">TOEFL Speaking: {{$course->min_toefl_speaking}}</p>
                                <p class="">TOEFL Writing: {{$course->min_toefl_writing}}</p>


                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <div class="card mt-2 p-4">
                                <p class="">@php echo $course->description; @endphp</p>

                            </div>
                        </div>






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
