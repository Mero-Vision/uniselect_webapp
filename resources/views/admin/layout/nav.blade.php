<!-- Header -->
<div class="header">

    <!-- Logo -->
    <div class="header-left active">
        <a href="{{url('admin/dashboard')}}" class="logo logo-normal">
            <img src="{{ url('assets/login/img/logo.png') }}" alt="Logo" style="width: 50px">
        </a>
        <a href="{{url('admin/dashboard')}}" class="logo-small">
            <img src="{{ url('assets/login/img/logo.png') }}" alt="Logo">
        </a>
        <a href="{{url('admin/dashboard')}}" class="dark-logo">
            <img src="{{ url('assets/login/img/logo.png') }}" alt="Logo">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i class="ti ti-menu-deep"></i>
        </a>
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <div class="header-user">
        <div class="nav user-menu">

            <!-- Search -->
            <div class="nav-item nav-search-inputs me-auto">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#" class="dropdown">
                        <div class="searchinputs" id="dropdownMenuClickable">
                            <input type="text" placeholder="Search">
                            <div class="search-addon">
                                <button type="submit"><i class="ti ti-command"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Search -->

            <div class="d-flex align-items-center">
                <div class="dropdown me-2">
                    <a href="#" class="btn btn-outline-light fw-normal bg-white d-flex align-items-center p-2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-calendar-due me-1"></i>Academic Year : <?php echo Date('Y'); ?>
                    </a>
                    
                </div>
                
                <div class="pe-1">
                    <div class="dropdown">
                        <a href="#" class="btn btn-outline-light bg-white btn-icon me-1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-square-rounded-plus"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border shadow-sm dropdown-md">
                            <div class="p-3 border-bottom">
                                <h5>Add New</h5>
                            </div>
                            <div class="p-3 pb-0">
                                <div class="row gx-2">
                                    <div class="col-6">
                                        <a href="add-student.html"
                                            class="d-block bg-primary-transparent ronded p-2 text-center mb-3 class-hover">
                                            <div class="avatar avatar-lg mb-2">
                                                <span
                                                    class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-primary rounded-circle"><i
                                                        class="ti ti-school"></i></span>
                                            </div>
                                            <p class="text-dark">Students</p>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="add-teacher.html"
                                            class="d-block bg-success-transparent ronded p-2 text-center mb-3 class-hover">
                                            <div class="avatar avatar-lg mb-2">
                                                <span
                                                    class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-success rounded-circle"><i
                                                        class="ti ti-users"></i></span>
                                            </div>
                                            <p class="text-dark">Teachers</p>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="add-staff.html"
                                            class="d-block bg-warning-transparent ronded p-2 text-center mb-3 class-hover">
                                            <div class="avatar avatar-lg rounded-circle mb-2">
                                                <span
                                                    class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-warning rounded-circle"><i
                                                        class="ti ti-users-group"></i></span>
                                            </div>
                                            <p class="text-dark">Staffs</p>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="add-invoice.html"
                                            class="d-block bg-info-transparent ronded p-2 text-center mb-3 class-hover">
                                            <div class="avatar avatar-lg mb-2">
                                                <span
                                                    class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-info rounded-circle"><i
                                                        class="ti ti-license"></i></span>
                                            </div>
                                            <p class="text-dark">Invoice</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="pe-1">
                    <a href="{{url('service-center')}}" class="btn btn-outline-light bg-white btn-icon position-relative me-1">
                        <i class="ti ti-brand-hipchat"></i>
                        <span class="chat-status-dot"></span>
                    </a>
                </div>
                
                <div class="pe-1">
                    <a href="#" class="btn btn-outline-light bg-white btn-icon me-1" id="btnFullscreen">
                        <i class="ti ti-maximize"></i>
                    </a>
                </div>
                <div class="dropdown ms-1">
                    <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                        data-bs-toggle="dropdown">
                        <span class="avatar avatar-md rounded">
                            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="Img" class="img-fluid">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="d-block">
                            <div class="d-flex align-items-center p-2">
                                <span class="avatar avatar-md me-2 online avatar-rounded">
                                    <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="img">
                                </span>
                                <div>
                                    <h6 class="">{{Auth::user()->name}}</h6>
                                    <p class="text-primary mb-0">Admin</p>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item d-inline-flex align-items-center p-2" href="{{url('admin/settings/profile')}}">
                                <i class="ti ti-user-circle me-2"></i>My Profile</a>
                            <a class="dropdown-item d-inline-flex align-items-center p-2"
                                href=""><i class="ti ti-settings me-2"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item d-inline-flex align-items-center p-2" href="{{url('admin/logout')}}"><i
                                    class="ti ti-login me-2"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="profile-settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>
<!-- /Header -->