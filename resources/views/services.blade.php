<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Services - Ejanla Entertainment & Food Service | Grilled Fish Catering & Events</title>
    <meta name="description" content="Discover Ejanla's exceptional services, including signature grilled fish, event catering, and vibrant entertainment for weddings, birthdays, and cultural festivals across the U.S.">
    <meta name="keywords" content="Ejanla Services, Grilled Fish Catering, Event Catering Services, African Food Festival, Private Event Catering, Cultural Events Catering, Ejanla Entertainment, Grilled Fish Events USA">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Services by Ejanla Entertainment - Catering & Events">
    <meta property="og:description" content="Explore Ejanla's services: signature grilled fish, catering for events, and hosting vibrant cultural and entertainment events across the U.S.">
    <meta property="og:image" content="{{ asset('assets/ejanla/ejanla2.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ejanla Services - Catering & Events Across the U.S.">
    <meta name="twitter:description" content="From delicious grilled fish to full-service catering for weddings and cultural festivals, Ejanla brings flavor and vibrant energy to your events.">
    <meta name="twitter:image" content="{{ asset('assets/ejanla/ejanla2.jpeg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Ejanla Entertainment and Food Service LLC",
            "description": "Specializing in grilled fish catering, event services, and entertainment for weddings, birthdays, and cultural festivals.",
            "image": "{{ asset('assets/ejanla/ejanla2.jpeg') }}",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Dallas",
                "addressRegion": "TX",
                "addressCountry": "US"
            },
            "telephone": "+1 (945) 232-3255",
            "email": "ejanlaseefood1@gmail.com",
            "url": "{{ url('/services') }}",
            "serviceType": [
                "Grilled Fish Catering",
                "Event Hosting",
                "African Cultural Events",
                "Private Party Catering"
            ],
            "areaServed": [
                "Dallas, TX",
                "New York, NY",
                "Chicago, IL",
                "Houston, TX",
                "California",
                "Orlando, FL",
                "Indianapolis, IN",
                "Maryland",
                "New Jersey"
            ],
            "sameAs": [
                "https://www.instagram.com/ejanla.entertainment?igsh=YzljYTk1ODg3Zg==",
                "https://www.facebook.com/ejanlaevents"
            ]
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
        <section class="bg-dark position-relative pt-xl-8 pb-0 overflow-hidden">
            <!-- Decoration START -->
            <!-- Grad blur -->
            <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
                <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
            </div>

            <!-- Grad blur -->
            <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
                <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
            </div>
            <!-- Decoration START -->

            <div class="container position-relative pt-4 pt-sm-5" data-bs-theme="dark">
                <div class="row">
                    <!-- Title and content -->
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <!-- Breadcrumb -->
                        <nav class="mb-2 d-flex justify-content-center justify-content-md-start" aria-label="breadcrumb">
                            <ol class="breadcrumb pt-0">
                                <!-- <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li> -->
                                <li><a class="text-white pe-1" href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" style="cursor: pointer;" aria-current="page"> / Services</li>
                            </ol>
                        </nav>
                        <!-- Title -->
                        <h1 class="mb-4">Our Services</h1>
                        <!-- Button -->
                        <a href="https://wa.me/19452323255" class="btn btn-white mb-0"><i class="bi bi-telephone me-2"></i>Contact us</a>
                    </div>

                    <!-- Image -->
                    <div class="col-sm-10 col-md-5 ms-auto mt-5 mt-md-0">
                        <img class="rounded-3" src="{{ asset('assets/ejanla/ejanla3.jpeg') }}" alt="Grilled fish served on a platter garnished with fresh vegetables and lemon slices, presented in a festive setting that suggests a lively and welcoming atmosphere, evoking a sense of celebration and enjoyment">
                    </div>
                </div>
            </div>

            <!-- Curve decoration -->
            <span>
                <svg class="position-absolute bottom-0 start-0 mb-n1 mb-md-n6" viewBox="0 0 1950 237" style="enable-background:new 0 0 1950 237;" xml:space="preserve">
                    <path class="fill-body" d="M1949.5,236.4H0v-164c717.2-131.2,1598.5-54.7,1949.5,0V236.4z" />
                </svg>
            </span>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Services START -->
        <section class="position-relative pt-6 pt-xxl-0">
            <div class="container">
                <div class="row g-4 g-lg-5">
                    <!-- Service item -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                            <!-- Card header -->
                            <div class="card-header bg-transparent p-0 pb-5 text-center">
                                <!-- Icon -->
                                <i class="bi bi-basket2-fill display-6 text-primary"></i>
                            </div>

                            <!-- Card body -->
                            <div class="card-footer bg-transparent mt-auto p-0">
                                <h6 class="mb-3">Signature Grilled Fish</h6>
                                <!-- List -->
                                <ul class="ps-3 mb-0">
                                    <li class="mb-2">Mouthwatering, perfectly seasoned</li>
                                    <li class="mb-2">Loved by customers across the U.S.</li>
                                    <li class="mb-2">Featured in viral social media videos</li>
                                </ul>
                            </div>
                            <!-- Hover button -->
                            <div class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                                <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link" href="https://ejanla.net">Explore flavors<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service item -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                            <!-- Card header -->
                            <div class="card-header bg-transparent p-0 pb-5 text-center">
                                <!-- Icon -->
                                <i class="bi bi-calendar-event-fill display-6 text-primary"></i>
                            </div>

                            <!-- Card body -->
                            <div class="card-footer bg-transparent mt-auto p-0">
                                <h6 class="mb-3">Weekly & Seasonal Events</h6>
                                <!-- List -->
                                <ul class="ps-3 mb-0">
                                    <li class="mb-2">Thursday–Sunday vibrant gatherings</li>
                                    <li class="mb-2">Events across major U.S. cities</li>
                                    <li class="mb-2">Sold-out shows featuring African culture</li>
                                </ul>
                            </div>
                            <!-- Hover button -->
                            <div class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                                <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link" href="https://ejanla.net">Join the fun<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service item -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                            <!-- Card header -->
                            <div class="card-header bg-transparent p-0 pb-5 text-center">
                                <!-- Icon -->
                                <i class="bi bi-people-fill display-6 text-primary"></i>
                            </div>

                            <!-- Card body -->
                            <div class="card-footer bg-transparent mt-auto p-0">
                                <h6 class="mb-3">Full Catering Services</h6>
                                <!-- List -->
                                <ul class="ps-3 mb-0">
                                    <li class="mb-2">Weddings, birthdays, anniversaries</li>
                                    <li class="mb-2">Corporate and community events</li>
                                    <li class="mb-2">Customized menus to suit your event</li>
                                </ul>
                            </div>
                            <!-- Hover button -->
                            <div class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                                <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link" href="https://ejanla.net">Book catering<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service item -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                            <!-- Card header -->
                            <div class="card-header bg-transparent p-0 pb-5 text-center">
                                <!-- Icon -->
                                <i class="bi bi-music-note-list display-6 text-primary"></i>
                            </div>

                            <!-- Card body -->
                            <div class="card-footer bg-transparent mt-auto p-0">
                                <h6 class="mb-3">Cultural Music & Entertainment</h6>
                                <!-- List -->
                                <ul class="ps-3 mb-0">
                                    <li class="mb-2">Live Afro cultural music bands</li>
                                    <li class="mb-2">Unique Afro-themed instruments</li>
                                    <li class="mb-2">Memorable soul-stirring experiences</li>
                                </ul>
                            </div>
                            <!-- Hover button -->
                            <div class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                                <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link" href="https://ejanla.net">Experience culture<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service item -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-bg-grad-hover card-content-hover bg-secondary bg-opacity-75 h-100 p-4 p-sm-5">
                            <!-- Card header -->
                            <div class="card-header bg-transparent p-0 pb-5 text-center">
                                <!-- Icon -->
                                <i class="bi bi-globe display-6 text-primary"></i>
                            </div>

                            <!-- Card body -->
                            <div class="card-footer bg-transparent mt-auto p-0">
                                <h6 class="mb-3">Festival Partnerships</h6>
                                <!-- List -->
                                <ul class="ps-3 mb-0">
                                    <li class="mb-2">Afro Tunnels Festival collaboration</li>
                                    <li class="mb-2">Promoting African food and culture</li>
                                    <li class="mb-2">World tours showcasing Motherland menus</li>
                                </ul>
                            </div>
                            <!-- Hover button -->
                            <div class="hover-content d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                                <a class="btn btn-white icon-link icon-link-hover mb-0 stretched-link" href="https://ejanla.net">Explore festivals<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row END -->

                <!-- CTA -->
                <p class="mb-0 mt-5 text-center heading-color">🔥 Let’s create something extraordinary together.
                    <a href="{{ url('/contact') }}" class="fw-bold hover-underline-animation heading-color">Got a project in mind?</a>
                </p>
            </div>
        </section>


        <!-- =======================
Services END -->

        <!-- =======================
Why choose us START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Image and rating -->
                    <div class="col-md-6 position-relative">
                        <!-- Rocket image -->
                        <div class="position-absolute top-0 start-0 ms-xl-5">
                            <img src="assets/images/elements/rocket-02.png" class="h-150px rotate-335" alt="rocket image">
                        </div>

                        <div class="row ps-xl-7">
                            <!-- Image -->
                            <div class="col-sm-8">
                                <img src="{{ asset('assets/ejanla/ejanla2.jpeg') }}" class="rounded-pill" style="height: 70vh;" alt="Oluwaseun Michael Ogunyamoju Ejanla Services, Grilled Fish Catering, Event Catering Services, African Food Festival, Private Event Catering, Cultural Events Catering, Ejanla Entertainment, Grilled Fish Events USA, Ejanla Entertainment and Food Service LLC, Ejanla Events, Ejanla Grilled Fish, Ejanla Catering, Ejanla Entertainment and Food Service, Ejanla Grilled Fish Catering, Ejanla Event Services, Ejanla Cultural Events, Ejanla Private Event Catering, Ejanla African Food Festival, Ejanla Event Catering Services" />
                            </div>
                            <!-- Trsutpilot rating -->
                            <div class="col-sm-4 col-md-8 col-lg-5 mt-auto ms-lg-n5 mb-5">
                                <div class="card shadow rounded text-center p-0 d-none">
                                    <!-- Card body -->
                                    <div class="card-body p-3">
                                        <h6 class="h1">4.8</h6>
                                        <ul class="list-inline d-flex justify-content-center gap-2 mb-1">
                                            <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                                        </ul>
                                        <span>2855 Reviews</span>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer bg-dark p-3">
                                        <img src="assets/images/elements/trustpilot-light.svg" class="h-30px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contents -->
                    <div class="col-md-6 col-lg-5 ms-auto mt-5 mt-md-0">
                        <!-- Title -->
                        <h2>Why choose Ejanla?</h2>
                        <!-- Accordion START -->
                        <div class="accordion accordion-icon accordion-border-bottom mt-5" id="accordionFaq">
                            <!-- Item 1 -->
                            <div class="accordion-item mb-3">
                                <div class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <span class="lead">Exceptional Food Experience</span>
                                    </button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pb-0">
                                        Our signature grilled fish is loved nationwide, known for its perfect seasoning and quality that has attracted millions of views on social media.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item mb-3">
                                <div class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        <span class="lead">Vibrant Weekly Events & Cultural Celebrations</span>
                                    </button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pb-0">
                                        Hosting sold-out events across multiple U.S. cities, we bring people together with unforgettable entertainment and cultural music performances.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item mb-3">
                                <div class="accordion-header font-base" id="heading-3">
                                    <button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="lead">Full Catering & Global Reach</span>
                                    </button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pb-0">
                                        From weddings to large festivals, we offer full catering services and are expanding our presence with world tours promoting African culture and cuisine.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion END -->
                    </div>

                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Why choose us END -->

        <!-- =======================

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

        @include('includes.footer')

</body>

</html>