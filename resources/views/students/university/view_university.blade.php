<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $university->name }}</title>
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
                            <h2 class="page-title m-0">{{ $university->name }}</h2>
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
                                        <img src="{{ $university->getFirstMediaUrl('university_image') }}"
                                            class="img-fluid rounded" style="max-width: 150px;" alt="University Image">
                                    </div>
                                    <div class="col-12 col-sm-9 text-center text-sm-start">
                                        <div class="row">
                                            <div class="col-6">
                                                <h4 class="">University Name: {{ $university->name }}</h4>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="">Country: {{ $university->country->name }}</h4>

                                            </div>
                                            <div class="col-6">
                                                <h4 class="">Address: {{ $university->address }}</h4>

                                            </div>
                                            <div class="col-6">
                                                <h4 class="">City: {{ $university->city }}</h4>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="">Website: {{ $university->website }}</h4>
                                            </div>

                                            <div class="col-6">
                                                <h4 class="">Email: {{ $university->email }}</h4>
                                            </div>

                                            <div class="col-6">
                                                <h4 class="">Phone: {{ $university->phone }}</h4>
                                            </div>


                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div><br>
                        <div class="col-12">
                            <div class="card mt-2 p-4">
                                <p class="">@php echo $university->description; @endphp</p>

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
