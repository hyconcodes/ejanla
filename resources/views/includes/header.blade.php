<!-- Header START -->
<header class="header-sticky header-absolute">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-0" href="{{url('/')}}">
                <img class="light-mode-item navbar-brand-item" src="{{asset('assets/ejanla/ejanla_logo.png')}}" alt="ejanla">
                <!-- <img class="dark-mode-item navbar-brand-item" src="{{asset('assets/images/logo-light.svg')}}" alt="logo"> -->
            </a>
            <!-- Logo END -->

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{url('/services')}}">Our Services</a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item d-none">
                        <a class="nav-link {{ request()->is('event') ? 'active' : '' }}" href="{{url('/event')}}">Event</a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact us</a> </li>
                </ul>
            </div>
            <!-- Main navbar END -->
            <ul class="nav align-items-center dropdown-hover ms-sm-2">
                <li class="nav-item">
                    <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-animation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </li>
            </ul>

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->