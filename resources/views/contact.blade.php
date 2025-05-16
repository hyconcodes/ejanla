<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us - Ejanla Entertainment & Food Service | Grilled Fish Catering & Events</title>
    <meta name="description" content="Get in touch with Ejanla Entertainment and Food Service LLC for inquiries about our signature grilled fish catering, event hosting, and cultural entertainment services across the U.S.">
    <meta name="keywords" content="Contact Ejanla, Grilled Fish Catering Contact, Event Catering Inquiry, African Food Festival Contact, Cultural Events Contact, Ejanla Entertainment Contact">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Contact Ejanla Entertainment and Food Service LLC">
    <meta property="og:description" content="Reach out to Ejanla for catering, event hosting, and entertainment services featuring our renowned grilled fish and vibrant cultural events.">
    <meta property="og:image" content="{{ asset('assets/ejanla/ejanla2.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Ejanla Entertainment & Food Service">
    <meta name="twitter:description" content="Contact Ejanla for signature grilled fish catering, event hosting, and cultural festival entertainment across the U.S.">
    <meta name="twitter:image" content="{{ asset('assets/ejanla/ejanla2.jpeg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Ejanla Entertainment and Food Service LLC",
            "description": "Contact Ejanla Entertainment and Food Service LLC for grilled fish catering, event hosting, and cultural entertainment services.",
            "image": "{{ asset('assets/ejanla/ejanla2.jpeg') }}",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Dallas",
                "addressRegion": "TX",
                "addressCountry": "US"
            },
            "telephone": "+1 (945) 232-3255",
            "email": "ejanlaseefood1@gmail.com",
            "url": "{{ url('/contact') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+1 (945) 232-3255",
                "contactType": "customer service",
                "email": "ejanlaseefood1@gmail.com",
                "availableLanguage": ["English"]
            },
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

        <!-- ======================= Hero START -->
        <section class="bg-dark position-relative overflow-hidden pt-xl-8" data-bs-theme="dark">
            <!-- Blur decoration -->
            <div class="position-absolute bottom-0 end-0 mb-n9">
                <img src="assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9" alt="Grad shape">
            </div>

            <div class="container position-relative pt-4 pt-sm-5">
                <!-- Title and content -->
                <span class="h2">👋</span>
                <h1 class="display-5 mt-3">Let's Connect with Ejanla</h1>

                <p class="mb-1">We’re here to help you savor the best grilled fish and entertainment experience.</p>
                <p>Support hours: <span class="text-primary fw-bold">24/7</span></p>
            </div>
        </section>
        <!-- =======================
    Hero END -->

        <!-- =======================
    Contact info START -->
        <section class="pt-0 mt-n6 mt-lg-n7 mt-xl-n8">
            <div class="container">
                <!-- Contact detail START -->
                <div class="row g-4 g-lg-5">
                    <!-- Call us -->
                    <div class="col-md-4">
                        <div class="card bg-secondary rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- Icon -->
                                <div class="icon-lg bg-pink text-white rounded-circle mb-3"><i class="bi bi-telephone"></i></div>
                                <h6>Call us</h6>
                                <p class="mb-0">Speak with a member of our team. We’re always ready to assist you.</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0 pt-3">
                                <a href="tel:+19452323255" class="text-primary-grad">+1 (945) 232-3255</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mail us -->
                    <div class="col-md-4">
                        <div class="card bg-secondary rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- Icon -->
                                <div class="icon-lg bg-primary text-white rounded-circle mb-3"><i class="bi bi-envelope"></i></div>
                                <h6>Mail us</h6>
                                <p class="mb-0">We’re prompt and aim to respond to all inquiries within 24 hours.</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0 pt-3">
                                <a href="mailto:ejanlaseefood1@gmail.com" class="text-primary-grad">ejanlaseefood1@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="col-md-4">
                        <div class="card bg-secondary rounded-4 p-4 h-100">
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- Icon -->
                                <div class="icon-lg bg-warning text-white rounded-circle mb-3"><i class="bi bi-headset"></i></div>
                                <h6>Support</h6>
                                <p class="mb-0">Check out helpful resources, FAQs and event booking support.</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent p-0 pt-3">
                                <a class="btn btn-sm btn-white-shadow icon-link icon-link-hover" href="https://wa.me/19452323255">Chat now<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact detail END -->
            </div>
        </section>
        <!-- =======================
    Contact info END -->

        <!-- =======================
    Contact form START -->
        <!-- You can add your contact form here -->
        <!-- =======================
    Contact form END -->

        <!-- =======================
    Map and office detail START -->
        <section class="position-relative pt-0 overflow-hidden">
            <!-- Decoration -->
            <div class="container">
                <div class="row g-4 align-items-center">
                    <!-- Map -->
                    <div class="col-lg-5">
                        <iframe class="w-100 h-200px h-lg-500px grayscale rounded-4 d-block mb-3 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3353.954453664468!2d-96.79685658482165!3d32.77666468098726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e99d81e02c51b%3A0xaee4410d51d7f317!2sDallas%2C%20TX%2C%20USA!5e0!3m2!1sen!2sin!4v1692222222222!5m2!1sen!2sin"
                            style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <div class="col-lg-7 ps-lg-6">
                        <!-- Title -->
                        <h2 class="mb-4">Our offices</h2>

                        <!-- Office details -->
                        <div class="row g-4 mb-4">
                            <!-- Office item -->
                            <div class="col-md-6">
                                <!-- Title and country image -->
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar avatar-xs flex-shrink-0">
                                        <img class="avatar-img rounded-circle" style="height: 50px; " src="{{ asset('assets/ejanla/dallas.jpg') }}" alt="USA Flag">
                                    </div>
                                    <h6 class="mb-0">Dallas, Texas (HQ)</h6>
                                </div>
                                <!-- List -->
                                <ul class="mb-0 mt-3">
                                    <li class="mb-2">1234 Ejanla St, Dallas, TX 75201</li>
                                    <li class="mb-2">Call: +1 (945) 232-3255</li>
                                    <li class="mb-2">Support hours: 24/7</li>
                                </ul>
                            </div>

                            <!-- Office item -->
                            <div class="col-md-6">
                                <!-- Title and country image -->
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar avatar-xs flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/flags/uk.svg') }}" alt="USA Flag">
                                    </div>
                                    <h6 class="mb-0">New York, New York</h6>
                                </div>
                                <!-- List -->
                                <ul class="mb-0 mt-3">
                                    <li class="mb-2">789 Ejanla Ave, New York, NY 10001</li>
                                    <li class="mb-2">Call: +1 (945) 232-3255</li>
                                    <li class="mb-2">Support hours: Mon-Sat 9:00 am to 6:00 pm</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Button -->
                        <a class="btn btn-secondary icon-link icon-link-hover" href="https://wa.me/2348147177291">Contact our help center<i class="bi bi-arrow-right"></i> </a>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
    Map and office detail END -->

    </main>

    <!-- **************** MAIN CONTENT END **************** -->

    @include('includes.footer')

</body>

</html>