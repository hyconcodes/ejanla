<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ejanla Entertainment - Grilled Fish & Vibrant Events | Dallas, Texas</title>
    <meta name="description" content="Welcome to Ejanla Entertainment and Food Service LLC, based in Dallas, Texas. Experience our signature grilled fish, vibrant events, and exceptional catering services across the United States.">
    <meta name="keywords" content="Ejanla, Oluwaseun Michael Ogunyamoju, grilled fish Dallas, Nigerian cuisine, African catering, vibrant events Dallas, Afro cultural events, Ejanla Entertainment, Oluwaseun Michael Ogunyamoju, African food festivals, Dallas nightlife, African music Dallas">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Ejanla Entertainment - Grilled Fish & Vibrant Events">
    <meta property="og:description" content="Discover Ejanla Entertainment, where delicious grilled fish meets vibrant events. Join us for unforgettable food and entertainment experiences in Dallas and beyond.">
    <meta property="og:image" content="{{ asset('assets/ejanla/ejanla.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <!-- Instagram -->
    <meta name="og:title" content="Ejanla Entertainment - Grilled Fish & Vibrant Events | Dallas, Texas">
    <meta name="og:description" content="Explore Ejanla Entertainment’s signature grilled fish, exciting events, and top-tier catering services. Bringing African cuisine and culture to life across the U.S.">
    <meta name="og:image" content="{{ asset('assets/ejanla/ejanla.jpeg') }}">
    <meta name="og:url" content="https://www.instagram.com/ejanla">
    <meta name="og:type" content="website">


    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Ejanla Entertainment and Food Service LLC",
            "alternateName": "Ejanla Grilled Fish",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Dallas",
                "addressRegion": "TX",
                "addressCountry": "US"
            },
            "description": "Ejanla Entertainment and Food Service LLC specializes in exceptional food and entertainment experiences, including signature grilled fish, vibrant events, and full catering services.",
            "image": "{{ asset('assets/ejanla/ejanla.jpeg') }}",
            "url": "{{ url('/') }}",
            "sameAs": [
                "https://www.facebook.com/ejanlaofficial",
                "https://www.instagram.com/ejanla.entertainment?igsh=YzljYTk1ODg3Zg==",
                "https://www.twitter.com/ejanlaevents"
            ],
            "founder": {
                "@type": "Person",
                "name": "Oluwaseun Michael Ogunyamoju",
                "jobTitle": "CEO"
            },
            "offers": {
                "@type": "Service",
                "serviceType": "Catering and Entertainment Services",
                "areaServed": "United States"
            }
        }
    </script>


    @include('includes.css_link')
</head>

<body>

    @include('includes.header')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="pt-8 pb-0 overflow-hidden">
            <div class="container" data-sticky-container>
                <div class="row align-items-stretch">
                    <!-- Image -->
                    <div class="col-lg-5 offset-lg-1 order-2 mb-5 mb-lg-0">
                        <div data-sticky data-margin-top="100" data-sticky-for="992">
                            <div class="position-relative h-500px h-md-750px w-lg-50vw">
                                <div class="w-100 h-500px h-md-750px rounded-4" style="background-image: url(assets/ejanla/ejanla.jpeg); background-size:cover; background-position:top center;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Contents -->
                    <div class="col-lg-6 order-1 mb-5 mb-lg-0">
                        <div class="pb-lg-7 pt-lg-5">
                            <!-- Pre title -->
                            <h5 class="mb-lg-4"><span class="hand-wave-animate">🖐️</span> Welcome to</h5>

                            <!-- Title -->
                            <h1 class="display-2 position-relative mb-6 mb-sm-5">
                                Ejanla Entertainment
                                <span class="h5 bg-primary text-white rounded-3 rotate-350 position-absolute bottom-0 end-0 mb-n5 mb-sm-n3 mb-lg-n1 px-4 py-3">Grilled Fish & Events</span>
                            </h1>

                            <p class="lead mb-4">
                                Located in Dallas, Texas, Ejanla Entertainment and Food Service LLC specializes in mouthwatering grilled fish and vibrant entertainment experiences. We host weekly sold-out events across major U.S. cities and cater to special occasions, celebrating African culture through food, music, and community.
                            </p>

                            <!-- Buttons -->
                            <a href="#" class="btn btn-secondary icon-link icon-link-hover">Join Our Events! <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>


                    <!-- Skills -->
                    <div class="col-xl-6 order-3">
                        <!-- Title -->
                        <h2 class="mb-4 mb-lg-5">Our Expertise</h2>

                        <div class="row g-4">
                            <!-- Expertise item -->
                            <div class="col-md-6">
                                <div class="card bg-warning bg-opacity-15 rounded-4 p-4 h-100">
                                    <!-- Icon -->
                                    <div class="card-header bg-transparent p-0 pb-4">
                                        <div class="icon-lg bg-warning text-white rounded-circle">
                                            <i class="bi bi-fire fa-lg"></i>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card-body p-0">
                                        <h6>Signature Grilled Fish</h6>
                                        <p class="mb-3">Renowned for our mouthwatering grilled fish, bringing authentic African flavors to every event.</p>
                                    </div>

                                    <!-- Link -->
                                    <div class="card-footer bg-transparent p-0">
                                        <a href="#" class="link-primary-grad icon-link icon-link-hover">Learn more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise item -->
                            <div class="col-md-6">
                                <div class="card bg-pink bg-opacity-15 rounded-4 p-4 h-100">
                                    <!-- Icon -->
                                    <div class="card-header bg-transparent p-0 pb-4">
                                        <div class="icon-lg bg-pink text-white rounded-circle">
                                            <i class="bi bi-calendar-event fa-lg"></i>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card-body p-0">
                                        <h6>Weekly Events</h6>
                                        <p class="mb-3">Hosting sold-out events across the U.S., creating vibrant and unforgettable experiences for our guests.</p>
                                    </div>

                                    <!-- Link -->
                                    <div class="card-footer bg-transparent p-0">
                                        <a href="#" class="link-primary-grad icon-link icon-link-hover">View events <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise item -->
                            <div class="col-md-6">
                                <div class="card bg-info bg-opacity-15 rounded-4 p-4 h-100">
                                    <!-- Icon -->
                                    <div class="card-header bg-transparent p-0 pb-4">
                                        <div class="icon-lg bg-info text-white rounded-circle">
                                            <i class="bi bi-bag-check fa-lg"></i>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card-body p-0">
                                        <h6>Catering Services</h6>
                                        <p class="mb-3">Providing exceptional catering for weddings, anniversaries, and corporate events, tailored to your needs.</p>
                                    </div>

                                    <!-- Link -->
                                    <div class="card-footer bg-transparent p-0">
                                        <a href="#" class="link-primary-grad icon-link icon-link-hover">Explore services <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise item -->
                            <div class="col-md-6">
                                <div class="card bg-success bg-opacity-15 rounded-4 p-4 h-100">
                                    <!-- Icon -->
                                    <div class="card-header bg-transparent p-0 pb-4">
                                        <div class="icon-lg bg-success text-white rounded-circle">
                                            <i class="bi bi-music-note-list fa-lg"></i>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card-body p-0">
                                        <h6>Cultural Music & Entertainment</h6>
                                        <p class="mb-3">Showcasing Afro cultural bands and music to create an immersive experience at every event.</p>
                                    </div>

                                    <!-- Link -->
                                    <div class="card-footer bg-transparent p-0">
                                        <a href="#" class="link-primary-grad icon-link icon-link-hover">Discover more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>

                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Projects START -->
        <section>
            <div class="container">

                <!-- Title and button -->
                <div class="row align-items-center">
                    <div class="col-md-5 text-center text-md-start">
                        <h2 class="mb-3 mb-md-0">A glimpse of our events</h2>
                    </div>
                    <div class="col-md-5 ms-auto text-center text-md-end">
                        <a href="#" class="btn btn-primary mb-0">View all events</a>
                    </div>
                </div>

                <div class="row justify-content-center mb-6">
                    <!-- Event item -->
                    <div class="col-md-6 d-flex align-items-center mt-4">
                        <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                            <div class="card-img-scale-wrapper rounded-4">
                                <!-- Card Image -->
                                <img src="{{asset('assets/ejanla/event1.jpeg')}}" class="img-scale rounded-4" alt="event-img">
                                <!-- Arrow button -->
                                <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                    <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body d-flex justify-content-between px-0 pb-0">
                                <div>
                                    <h6 class="mb-0"><a href="#" class="heading-color stretched-link">Afro Nation After Party</a></h6>
                                    <span>Miami 2023</span>
                                </div>
                                <small>@2023</small>
                            </div>
                        </div>
                    </div>

                    <!-- Event item -->
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-11 col-lg-9">
                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                    <div class="card-img-scale-wrapper rounded-4">
                                        <!-- Card Image -->
                                        <img src="{{asset('assets/ejanla/event2.jpeg')}}" class="img-scale rounded-4" alt="event-img">
                                        <!-- Arrow button -->
                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                                        <div>
                                            <h6 class="mb-0"><a href="#" class="heading-color stretched-link">Obi's House After Party</a></h6>
                                            <span>New York</span>
                                        </div>
                                        <small>@2023</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event item -->
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-11 col-lg-9">
                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                    <div class="card-img-scale-wrapper rounded-4">
                                        <!-- Card Image -->
                                        <img src="{{asset('assets/ejanla/event3.jpeg')}}" class="img-scale rounded-4" alt="event-img">
                                        <!-- Arrow button -->
                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                                        <div>
                                            <h6 class="mb-0"><a href="#" class="heading-color stretched-link">Bella Shmurda Live</a></h6>
                                            <span>Club Vivo</span>
                                        </div>
                                        <small>@2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event item -->
                    <div class="col-md-6 d-flex align-items-center mt-4">
                        <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                            <div class="card-img-scale-wrapper rounded-4">
                                <!-- Card Image -->
                                <img src="{{asset('assets/ejanla/event4.jpeg')}}" class="img-scale rounded-4" alt="event-img">
                                <!-- Arrow button -->
                                <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                    <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body d-flex justify-content-between px-0 pb-0">
                                <div>
                                    <h6 class="mb-0"><a href="#" class="heading-color stretched-link">African Food Festival</a></h6>
                                    <span>Dallas, TX</span>
                                </div>
                                <small>@2023</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Small CTA -->
                <div class="d-inline-flex justify-content-center mx-auto w-100">
                    <p class="bg-dark rounded-3 text-white text-center px-5 py-3 mb-0">✌️ Experience the best of African cuisine and culture with us.
                        <a href="#" class="fw-semibold hover-underline-animation text-white">Book us today</a>
                    </p>
                </div>

            </div>
        </section>

        <!-- =======================
Projects END -->

        <!-- =======================
About me START -->
        <section class="position-relative z-index-2 py-0">
            <div class="container-fluid position-relative">
                <div class="max-width-1550 bg-secondary bg-opacity-50 position-relative rounded-4 overflow-hidden px-3 py-4 py-sm-6 py-lg-8">
                    <!-- Grad blur -->
                    <div class="position-absolute top-0 end-0 mt-n6">
                        <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="rotate-270 blur-8 opacity-2" alt="Grad shape">
                    </div>

                    <div class="container">
                        <!-- Title and content -->
                        <div class="row g-4">
                            <div class="col-lg-7">
                                <span class="text-primary-grad fw-semibold">About us</span>
                                <h2 class="my-3">Elevating events with premium entertainment and food</h2>
                                <p class="mb-4">Since our founding, <span class="text-primary fw-bold">Ejanla Entertainment and Food Service LLC</span> has been dedicated to creating unforgettable experiences. From captivating events to delightful catering, we bring passion and precision to every project, ensuring every client and guest is left inspired.</p>

                                <!-- Social links -->
                                <ul class="list-inline d-flex flex-wrap gap-2 align-items-center mb-0">
                                    <li class="list-inline-item heading-color fw-semibold me-sm-3">Connect with us:</li>
                                    <li class="list-inline-item"> <a class="btn btn-sm bg-facebook mb-0" href="#"><i class="bi bi-facebook lh-base"></i> Facebook</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-sm bg-instagram-gradient mb-0" href="https://www.instagram.com/ejanla.entertainment?igsh=YzljYTk1ODg3Zg==" target="_blank"><i class="bi bi-instagram lh-base"></i> Instagram</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-sm bg-twitter-x mb-0" href="#"><i class="bi bi-twitter-x lh-base"></i> Twitter</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-sm bg-linkedin mb-0" href="#"><i class="bi bi-linkedin lh-base"></i> Linkedin</a> </li>
                                </ul>
                            </div>

                            <!-- Counter -->
                            <div class="col-lg-4 ms-auto">
                                <div class="row">
                                    <!-- Item -->
                                    <div class="col-12 border-bottom border-primary border-opacity-25 mb-3">
                                        <div class="d-flex mb-2">
                                            <h4 class="purecounter display-4 mb-0" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="300">0</h4>
                                            <span class="display-4 text-primary mb-0">+</span>
                                        </div>
                                        <p class="lead heading-color pb-3">Years in the industry</p>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-sm-6">
                                        <div class="d-flex mb-2">
                                            <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="250" data-purecounter-delay="300">0</h4>
                                            <span class="h2 mb-0">+</span>
                                        </div>
                                        <p class="heading-color">Events hosted</p>
                                    </div>

                                    <!-- Item -->
                                    <div class="col-sm-6">
                                        <div class="d-flex mb-2">
                                            <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="500" data-purecounter-delay="300">0</h4>
                                            <span class="h2 mb-0">+</span>
                                        </div>
                                        <p class="heading-color">Happy clients</p>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =======================
About me END -->

        <!-- =======================
Blog START -->
        <section class="d-none">
            <div class="container" data-sticky-container>
                <div class="row">
                    <!-- Title and buttons -->
                    <div class="col-lg-4">
                        <div data-sticky data-margin-top="100" data-sticky-for="768">
                            <h2 class="mb-3">Development tips & trends</h2>
                            <p class="mb-sm-5"><i class="bi bi-instagram text-primary-grad me-2"></i>Follow us on <b>Instagram</b> to see life at <a href="#" class="hover-underline-animation">@folio</a></p>
                        </div>
                    </div>

                    <!-- Blog list -->
                    <div class="col-lg-7 ms-auto">
                        <!-- Blog item -->
                        <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                            <div class="row align-items-sm-center">
                                <!-- Image -->
                                <div class="col-5 col-sm-3 col-xl-2">
                                    <img src="assets/images/blog/4by4/03.jpg" class="card-img" alt="blog-img">
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-sm-9 col-xl-10">
                                    <div class="card-body ps-0 pe-3 py-0">
                                        <!-- Title -->
                                        <h6 class="card-title mb-3 mb-md-0">10 essential tips for crafting a stunning website</h6>
                                        <!-- list and button -->
                                        <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                            <ul class="nav nav-divider align-items-center">
                                                <li class="nav-item d-none d-sm-block">Aug 28, 2024</li>
                                                <li class="nav-item d-none d-xl-block">5 min read</li>
                                            </ul>

                                            <a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog item -->
                        <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                            <div class="row align-items-sm-center">
                                <!-- Image -->
                                <div class="col-5 col-sm-3 col-xl-2">
                                    <img src="assets/images/blog/4by4/01.jpg" class="card-img" alt="blog-img">
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-sm-9 col-xl-10">
                                    <div class="card-body ps-0 pe-3 py-0">
                                        <!-- Title -->
                                        <h6 class="card-title mb-3 mb-md-0">The future of UI/UX design: trends to watch in 2024</h6>
                                        <!-- list and button -->
                                        <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                            <ul class="nav nav-divider align-items-center">
                                                <li class="nav-item d-none d-sm-block">Aug 18, 2024</li>
                                                <li class="nav-item d-none d-xl-block">5 min read</li>
                                            </ul>

                                            <a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog item -->
                        <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                            <div class="row align-items-sm-center">
                                <!-- Image -->
                                <div class="col-5 col-sm-3 col-xl-2">
                                    <img src="assets/images/blog/4by4/06.jpg" class="card-img" alt="blog-img">
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-sm-9 col-xl-10">
                                    <div class="card-body ps-0 pe-3 py-0">
                                        <!-- Title -->
                                        <h6 class="card-title mb-3 mb-md-0">Behind the scenes of my latest web project</h6>
                                        <!-- list and button -->
                                        <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                            <ul class="nav nav-divider align-items-center">
                                                <li class="nav-item d-none d-sm-block">Aug 12, 2024</li>
                                                <li class="nav-item d-none d-xl-block">5 min read</li>
                                            </ul>

                                            <a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog item -->
                        <article class="card card-hover-transition bg-transparent border-bottom rounded-0 p-4 ps-0">
                            <div class="row align-items-sm-center">
                                <!-- Image -->
                                <div class="col-5 col-sm-3 col-xl-2">
                                    <img src="assets/images/blog/4by4/05.jpg" class="card-img" alt="blog-img">
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-sm-9 col-xl-10">
                                    <div class="card-body ps-0 pe-3 py-0">
                                        <!-- Title -->
                                        <h6 class="card-title mb-3 mb-md-0">How to optimize your website for SEO in 2024</h6>
                                        <!-- list and button -->
                                        <div class="d-sm-flex justify-content-between align-items-center mt-3">
                                            <ul class="nav nav-divider align-items-center">
                                                <li class="nav-item d-none d-sm-block">Aug 12, 2024</li>
                                                <li class="nav-item d-none d-xl-block">5 min read</li>
                                            </ul>

                                            <a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Blog END -->

        <!-- Contact info START -->
        <section class="pt-0 pt-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Image -->
                    <div class="col-lg-6 pe-lg-5">
                        <img src="{{asset('assets/ejanla/ejanla2.jpeg')}}" class="rounded-4" alt="portfolio-img">
                    </div>

                    <!-- Content and form -->
                    <div class="col-lg-6">
                        <!-- Title -->
                        <h2 class="mb-4">Get in touch with us</h2>

                        <!-- Form START -->
                        <form class="row form-border-bottom g-3">
                            <!-- Name -->
                            <div class="col-12">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-person"></i></span>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-12">
                                <div class="position-relative">
                                    <input type="email" class="form-control" placeholder="Your Email Address" required>
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-envelope"></i></span>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="position-relative">
                                    <textarea class="form-control" style="height: 100px" placeholder="How can we help you?" required></textarea>
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-0 end-0"><i class="bi bi-chat-dots"></i></span>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary-grad mb-0">Submit Inquiry</button>
                            </div>
                        </form>
                        <!-- Form END -->

                        <!-- Contact info -->
                        <div class="d-sm-flex gap-5 mt-5">
                            <!-- Phone -->
                            <div class="d-flex gap-2 mb-4">
                                <!-- Icon -->
                                <div class="heading-color lead"><i class="bi bi-telephone"></i></div>
                                <!-- Content -->
                                <div>
                                    <p class="heading-color fw-semibold mb-0">Call us:</p>
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item pb-0"> <a href="tel:+12518546308" class="text-primary-hover">+(945) 232-3255</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="d-flex gap-2 mb-4">
                                <!-- Icon -->
                                <div class="heading-color lead"><i class="bi bi-envelope"></i></div>
                                <!-- Content -->
                                <div>
                                    <p class="heading-color fw-semibold mb-0">Email us:</p>
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item pb-0"> <a href="mailto:contact@ejanla.com" class="text-primary-hover">ejanlaseefood1@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact info END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    @include('includes.footer')

    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> <!-- centered -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribeModalLabel">Subscribe for Event Updates</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Stay updated on upcoming events by subscribing to Ejanla's newsletter.</p>
                    <form id="subscribeForm">
                        <div class="mb-3">
                            <label for="subscriberEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="subscriberEmail" placeholder="name@example.com" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                    </form>
                    <div id="subscribeMessage" class="mt-3" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS to show modal on page load and handle form -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Show modal on page load
            const subscribeModal = new bootstrap.Modal(document.getElementById('subscribeModal'));
            subscribeModal.show();

            // Form submit handler (simple example)
            document.getElementById('subscribeForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const emailInput = document.getElementById('subscriberEmail');
                const messageDiv = document.getElementById('subscribeMessage');

                // Simple validation already done by "required" attribute
                const email = emailInput.value.trim();

                // TODO: Add your own AJAX or API call here to save email to your database/mail list

                messageDiv.style.display = 'block';
                messageDiv.className = 'alert alert-success';
                messageDiv.textContent = `Thanks for subscribing with ${email}!`;

                // Reset form & optionally hide modal after delay
                this.reset();

                setTimeout(() => {
                    subscribeModal.hide();
                    messageDiv.style.display = 'none';
                }, 3000);
            });
        });
    </script>
</body>

</html>