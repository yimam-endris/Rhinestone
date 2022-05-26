<nav class="navbar top-navbar col-lg-12 col-12 p-0">
    <div class="container">
        {{-- <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img
                    src="https://www.bootstrapdash.com/demo/spica/template/images/logo.svg"
                    alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img
                    src="https://www.bootstrapdash.com/demo/spica/template/images/logo-mini.svg"
                    alt="logo" /></a>
        </div> --}}
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, {{ Auth::user()->name }}</h4>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        id="profileDropdown">
                        <img src="{{ asset('assets/images/default-avatar.png') }}" alt="profile" />
                        <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                        aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="fa fas-cog text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </div>
</nav>