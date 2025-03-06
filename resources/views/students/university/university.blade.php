<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Universities</title>
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

                        <div class="col">
                            <h2 class="page-title">
                                All University </h2>
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
                        @forelse ($universities as $data)
                            <div class="col-sm-6 col-xl-4 mb-3">
                                <div class="card card-sm d-flex align-items-center justify-content-center text-center"
                                    style="height: 170px">
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                        <div class="mb-2">
                                            <img src="{{ $data->getFirstMediaUrl('university_image') }}"
                                                style="width: 120px;" class="img-fluid" />
                                        </div>
                                        <div class="font-weight-medium">
                                            <a
                                                href="{{ url('student/university', $data->slug) }}">{{ $data->name }}</a>
                                        </div>
                                        <div class="text-muted">Country: {{ $data->country->name }}</div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                <img src="{{ url('assets/admin/img/no-data.png') }}" class="img-fluid d-block mx-auto"
                                    style="width: 200px" />
                                <p class="text-center">No University Found!</p>
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
