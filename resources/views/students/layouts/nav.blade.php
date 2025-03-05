<div class="navbar-expand-xl">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{request()->is('student/home')?'active':''}}">
                        <a class="nav-link" href="{{url('student/home')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="nav-link-title">
                                Home </span>
                        </a>
                    </li>

                    <li class="nav-item {{request()->is('student/university')?'active':''}}">
                        <a class="nav-link" href="{{url('student/university')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="nav-link-title">
                                University </span>
                        </a>
                    </li>

                    <li class="nav-item {{request()->is('student/courses')?'active':''}}">
                        <a class="nav-link" href="{{url('student/courses')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="nav-link-title">
                                Courses </span>
                        </a>
                    </li>

                    <li class="nav-item {{request()->is('student/course-recommendation')?'active':''}}">
                        <a class="nav-link" href="{{url('student/course-recommendation')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="nav-link-title">
                                Course Recommendation </span>
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</div>
