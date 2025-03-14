<header class="navbar navbar-expand-xl navbar-light d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ url('student/home') }}">
                <img src="{{ url('assets/login/img/logo.png') }}" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">

            <div class="change-language  ms-auto me-3 text--title">
                <select class="language-bar" onChange="window.location.href=this.value">
                    <option value="" selected>
                        English</option>
                    {{-- <option value="">Nepali</option> --}}
                </select>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm"
                        style="background-image: url({{ Avatar::create(auth()->user()->name)->toBase64() }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ auth()->user()->name }}</div>
                        <div class="mt-1 small text-muted">User</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="{{ url('student/profile') }}" class="dropdown-item">Profile
                        Setting</a>
                        <a href="{{ url('student/test-scores') }}" class="dropdown-item">Test Score</a>
                    <a href="{{ url('service-center') }}" class="dropdown-item">Service Center</a>

                   
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('student/logout') }}" class="dropdown-item">Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
