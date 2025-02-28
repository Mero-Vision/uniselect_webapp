<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Profile</title>
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
                        <div class="col-12 mb-3">
                           
                        </div>
                        <div class="col">
                            <h2 class="page-title">
                                Profile Settings </h2>
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
                    <form action="{{url('student/profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="card card-sm">
                                    <a href="#" class="d-block">
                                        <img src="{{ Auth::user()->getFirstMediaUrl('profile_image') ?: url('assets/students/img/default.png') }}" width="300px" height="300px" class="card-img-top imageShow">
                                    </a>
                                    <div class="card-body">
                                        <input type="file" class="form-control imageUpload file-type mb-1" name="profile_image" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body row">
                                        <div class="form-group col-md-6 mb-2">
                                            <label class="mb-2">Name</label>
                                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" required>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label class="mb-2">Email</label>
                                            <input class="form-control" type="email" value="{{ Auth::user()->email }}" disabled>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label class="mb-2">Phone</label>
                                            <input class="form-control" name="mobile_no" type="text"
                                                value="{{ Auth::user()->mobile_no }}" required>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label class="mb-2">Country</label>
                                            <input class="form-control" type="text" value="Nepal" disabled>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label class="mb-2">City</label>
                                            <input class="form-control" type="text" name="city" value="{{ Auth::user()->city }}">
                                        </div>                                     
                                        <div class="form-group col-md-6 mb-2">
                                            <label class="mb-2">Address</label>
                                            <input class="form-control" type="text" name="address"
                                                value="{{ Auth::user()->address }}">
                                        </div>
                                        <div class="form-group col-md-12 mb-2 text-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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


    <script src="{{ url('assets/students/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/students/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/students/js/tabler.min.js') }}"></script>
    <script src="{{ url('assets/students/js/demo.min.js') }}"></script>


    <script>
        document.querySelector('.imageUpload').addEventListener('change', function(event) {
    const file = event.target.files[0]; // Get the selected file
    if (file) {
        const reader = new FileReader(); // Create a FileReader to read the file

        reader.onload = function(e) {
            // Update the image source with the uploaded file
            document.querySelector('.imageShow').setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(file); // Read the file as a Data URL
    }
});
    </script>











</body>

</html>
