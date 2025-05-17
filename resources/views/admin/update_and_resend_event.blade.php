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
                        <p class="mb-0">Update your event details below. After updating, all subscribed members will be renotified via email to ensure they have the latest information about your event!</p>
                        <!-- Subscription -->
                        
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
                        <h4 class="mb-4">Update and re-notify...</h4>

                        <form class="modal-body p-4" method="POST" action="{{ url('update_and_resend_event/' . $event->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

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
                                <input type="text" class="form-control" id="eventTitle" name="title" value="{{ old('title', $event->title) }}">
                            </div>
                            <!-- Event Caption -->
                            <div class="mb-3">
                                <label class="form-label heading-color" for="eventCaption">Caption</label>
                                <textarea class="form-control" id="eventCaption" name="caption" rows="3">{{ old('caption', $event->caption) }}</textarea>
                            </div>
                            <!-- Event Date -->
                            <div class="mb-3">
                                <label class="form-label heading-color" for="eventDate">Date</label>
                                <input type="date" class="form-control" id="eventDate" name="date" value="{{ old('date', $event->date) }}">
                            </div>
                            <!-- Event Time -->
                            <div class="mb-3">
                                <label class="form-label heading-color" for="eventTime">Time</label>
                                <input type="time" class="form-control" id="eventTime" name="time" value="{{ old('time', $event->time) }}">
                            </div>
                            <!-- Event Location -->
                            <div class="mb-3">
                                <label class="form-label heading-color" for="eventLocation">Location</label>
                                <input type="text" class="form-control" id="eventLocation" name="location" value="{{ old('location', $event->location) }}">
                            </div>
                            <!-- Event Flyer -->
                            <div class="mb-3">
                                <label class="form-label heading-color" for="eventFlyer">Flyer</label>
                                <input class="form-control" type="file" id="eventFlyer" name="flyer" accept="image/*">
                                @if(!empty($event->flyer))
                                    <div class="mt-2">
                                        <img class="rounded-2" src="{{ asset('storage/' . $event->flyer) }}" alt="Current Flyer" style="max-width: 200px;">
                                    </div>
                                @endif
                            </div>
                            <!-- Buttons -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" class="btn btn-primary">Create Event</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
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

</body>

</html>