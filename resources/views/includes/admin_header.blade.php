<!-- Header START -->
<header class="header-sticky header-absolute">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-0" href="{{url('/admin_events')}}">
                <img class="light-mode-item navbar-brand-item"
                    style="width: 100px; height: 50px; border-radius: 10%;" src="{{asset('assets/ejanla/ejanla_logo2.png')}}" alt="ejanla">
                <!-- <img class="dark-mode-item navbar-brand-item" src="{{asset('assets/images/logo-light.svg')}}" alt="logo"> -->
            </a>
            <!-- Logo END -->

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin_events') ? 'active' : '' }}" href="{{ url('/admin_events') }}">Events</a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin_blogs') ? 'active' : '' }}" href="{{url('/admin_blogs')}}">Blogs</a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin_create_blog')}}">Create Blog</a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#createEventModal">New event</a>
                    </li>
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