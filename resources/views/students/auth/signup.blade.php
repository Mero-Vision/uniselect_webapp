<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Customer Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/login/img/logo.png') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/feather.css') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/tabler-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/login/css/style.css') }}">

</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="container-fuild">
            <div class="login-wrapper w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row">
                    <div class="col-lg-6">
                        <div
                            class="d-lg-flex align-items-center justify-content-center bg-light-300 d-lg-block d-none flex-wrap vh-100 overflowy-auto bg-01">
                            <div>
                                <img src="{{ url('assets/login/img/authentication-06.svg') }}" alt="Img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                            <div class="col-md-8 mx-auto p-4">
                                <form action="{{ url('sign-up') }}" method="POST">
                                    @csrf
                                    <div>
                                        <div class=" mx-auto mb-5 text-center">
                                            <img src="{{ url('assets/login/img/logo.png') }}" class="img-fluid"
                                                alt="Logo" style="width: 150px">
                                        </div>
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class=" mb-4">
                                                    <h2 class="mb-2">Welcome</h2>
                                                    <p class="mb-0">Please enter your details to sign in</p>
                                                </div>

                                                <div class="text-center">
                                                    <h6 class="fw-normal text-dark mb-0"><a href=""
                                                            class="hover-a "> Admin Login</a>
                                                    </h6>
                                                </div>

                                                <div class="login-or">
                                                    <span class="span-or">Or</span>
                                                </div>
                                                <div class="mb-3 ">


                                                    <label class="form-label">Name</label>
                                                    <div class="input-icon mb-3 position-relative">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-user"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ old('name') }}">
                                                        @error('name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>


                                                    <label class="form-label">Email Address</label>
                                                    <div class="input-icon mb-3 position-relative">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-mail"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="email"
                                                        value="{{ old('email') }}">
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>


                                                    <label class="form-label">Password</label>
                                                    <div class="pass-group mb-3">
                                                        <input type="password" class="pass-input form-control" id="password" name="password">
                                                        <span class="ti toggle-password ti-eye-off"></span>
                                                        @error('password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <label class="form-label">Confirm Password</label>
                                                    <div class="pass-group">
                                                        <input type="password" class="pass-input form-control" id="password_confirmation" name="password_confirmation">
                                                        <span class="ti toggle-password ti-eye-off"></span>
                                                        @error('password_confirmation')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>


                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary w-100">Sign
                                                        Up</button>
                                                </div>
                                                <div class="text-center">
                                                    <h6 class="fw-normal text-dark mb-0">Already have an account?<a
                                                            href="{{ url('/') }}" class="hover-a "> Sign In</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 text-center">
                                            <p class="mb-0 ">Copyright &copy; <?php echo Date('Y'); ?> - UniSelect</p>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <!-- /Main Wrapper -->


    <script src="{{url('assets/login/js/jquery-3.7.1.min.js')}}" type="61fe09eaf1aaca2bbff735d6-text/javascript"></script>
    <script src="{{url('assets/login/js/bootstrap.bundle.min.js')}}" type="61fe09eaf1aaca2bbff735d6-text/javascript"></script>
    <script src="{{url('assets/login/js/feather.min.js')}}" type="61fe09eaf1aaca2bbff735d6-text/javascript"></script>
    <script src="{{url('assets/login/js/jquery.slimscroll.min.js')}}" type="61fe09eaf1aaca2bbff735d6-text/javascript"></script>
    <script src="{{url('assets/login/js/select2.min.js')}}" type="61fe09eaf1aaca2bbff735d6-text/javascript"></script>
    <script src="{{url('assets/login/js/script.js')}}" type="61fe09eaf1aaca2bbff735d6-text/javascript"></script>
</body>

</html>
