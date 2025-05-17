<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ejanla Events Management</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!-- Header START -->
    @include('includes.admin_header')
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="bg-secondary position-relative pt-xl-8 pb-3">
            <div class="d-flex justify-content-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
            <!-- Curve decoration -->
            <span>
                <svg class="position-absolute bottom-0 start-0" viewBox="0 0 1920 193.5" style="enable-background:new 0 0 1920 193.5;" xml:space="preserve">
                    <path class="fill-body" d="M556,116.1c-184.7-78.7-447.6-32.8-556,0v77.4h1920V0c-56.4,35.6-132.2,69.4-285.5,38 C1481.2,6.6,1333-21.5,1125.7,55.4C1012.7,108.5,740.7,194.8,556,116.1z" />
                </svg>
            </span>

            <div class="container position-relative pt-4 pt-sm-5">
                <!-- Title and content -->
                <div class="row mb-5 mb-md-7">
                    <!-- Title -->
                    <div class="col-lg-6 col-xl-5">
                        <h1 class="fw-bold display-6 mb-3 mb-sm-4 mb-lg-0">Ejanla Events <span class="text-primary-grad">Management</span></h1>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-5 ms-auto">
                        <p class="mb-0">Create exciting new events to engage with your subscribers. Once an event is created, all subscribed members will receive an email notification to keep them informed and excited about your latest offerings!</p>
                        <!-- Subscription -->
                        <div class="bg-body rounded-pill position-relative z-index-2 p-1 mt-4">
                            <form class="input-group align-items-center" method="GET" action="{{ url('search_events') }}">
                                <input
                                    class="form-control bg-transparent border-0 me-1"
                                    type="text"
                                    name="search"
                                    value="{{ request('search') }}"
                                    placeholder="Search events...">
                                <button type="submit" class="btn btn-dark btn-round rounded-circle lh-1 mb-0 me-2">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

                <!-- Blog box START -->

                <!-- Blog box END -->
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Blog list and sidebar START -->
        <section>
            <div class="container pt-2">
                <div class="row">
                    <!-- Blog list START -->
                    <div class="col-xl-8 mb-5 mb-xl-0">
                        <!-- Title -->
                        <h4 class="mb-4">All events</h4>

                        <!-- Blog item -->
                        @foreach ($events as $items)
                        <article class="card bg-secondary bg-opacity-50 card-hover-transition p-3 mb-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Image -->
                                    @if($items->flyer)
                                    <img src="{{ asset('storage/' . $items->flyer) }}" class="img-fluid card-img w-100" alt="event-flyer">
                                    @else
                                    <img src="{{ asset('assets/ejanla/ejanla_logo2.png') }}" class="img-fluid card-img" alt="default-event-img">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <!-- Content -->
                                    <div class="card-body d-flex flex-column h-100 ps-0 pe-3">
                                        <!-- Badge -->
                                        <div class="d-flex gap-2 mb-3">
                                            <span class="badge bg-primary">{{ \Carbon\Carbon::parse($items->date)->format('F j, Y') }} - {{ \Carbon\Carbon::parse($items->time)->format('g:i A') }}</span>
                                            <span class="badge bg-white text-dark">
                                                <i class="bi bi-geo-alt-fill me-1"></i>{{ $items->location }}
                                            </span>
                                        </div>
                                        <!-- Title -->
                                        <h6 class="card-title mb-3 mb-md-0">{{ $items->title }}</h6>
                                        <!-- Author name and button -->
                                        <div class="d-sm-flex justify-content-between align-items-center mt-auto">
                                            <p class="mb-4 mb-sm-2 heading-color fw-semibold">{{ $items->caption }}</p>
                                            <a class="icon-link icon-link-hover stretched-link" href="{{url('/update_and_resend_event/' . $items->id)}}">Update and Broadcast<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                        <div class="d-flex justify-content-center">
                            {{ $events->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    <!-- Blog list END -->

                    <!-- Sidebar START -->
                    <!-- Sidebar END -->
                </div>
            </div>
        </section>
        <!-- =======================
Blog list and sidebar END -->

        <!-- =======================
Quote and top author START -->
        <!-- =======================
Quote and top author END -->

        <!-- =======================
Blog slider START -->
        <!-- =======================
Blog slider END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    @include('includes.admin_footer')
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--Vendors-->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Theme Functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    <!-- New event form -->
    <div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="createEventModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header p-3">
                    <h6 class="modal-title mb-0" id="createEventModalLabel">Create New Event</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-body p-4" method="POST" action="{{ url('admin_events') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Event Title -->
                    <div class="mb-3">
                        <label class="form-label heading-color" for="eventTitle">Title</label>
                        <input type="text" class="form-control" id="eventTitle" name="title">
                    </div>
                    <!-- Event Caption -->
                    <div class="mb-3">
                        <label class="form-label heading-color" for="eventCaption">Caption</label>
                        <textarea class="form-control" id="eventCaption" name="caption" rows="3"></textarea>
                    </div>
                    <!-- Event Date -->
                    <div class="mb-3">
                        <label class="form-label heading-color" for="eventDate">Date</label>
                        <input type="date" class="form-control" id="eventDate" name="date">
                    </div>
                    <!-- Event Time -->
                    <div class="mb-3">
                        <label class="form-label heading-color" for="eventTime">Time</label>
                        <input type="time" class="form-control" id="eventTime" name="time">
                    </div>
                    <!-- Event Location -->
                    <div class="mb-3">
                        <label class="form-label heading-color" for="eventLocation">Location</label>
                        <input type="text" class="form-control" id="eventLocation" name="location">
                    </div>
                    <!-- Event Flyer -->
                    <div class="mb-3">
                        <label class="form-label heading-color" for="eventFlyer">Flyer</label>
                        <input class="form-control" type="file" id="eventFlyer" name="flyer" accept="image/*">
                    </div>
                    <!-- Buttons -->
                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-primary">Create Event</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>