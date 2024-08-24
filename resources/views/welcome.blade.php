<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>AI4 Heath 2024</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-medic-care.css') }}" rel="stylesheet">

        <style>
            .send {
                display: inline-block;
                width: 150px;
                height: 50px;
                border-radius: 10px;
                border: 1px solid #03045e;
                position: relative;
                overflow: hidden;
                transition: all 0.5s ease-in;
                z-index: 1;
                background-color: transparent;
                cursor: pointer;
                margin-left: 40%;
            }

            .send::before,
            .send::after {
                content: '';
                position: absolute;
                top: 0;
                width: 0;
                height: 100%;
                transform: skew(15deg);
                transition: all 0.5s;
                overflow: hidden;
                z-index: -1;
            }

            .send::before {
                left: -10px;
                background: #240046;
            }

            .send::after {
                right: -10px;
                background: #5a189a;
            }

            .send:hover::before,
            .send:hover::after {
                width: 58%;
            }

            .send:hover span {
                color: #e0aaff;
                transition: 0.3s;
            }

            .send span {
                color: #03045e;
                font-size: 18px;
                transition: all 0.3s ease-in;
            }
        </style>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>

    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        <img src="images/logos/ai4health.png" width="170">
                        <strong class="d-block">International Workshop on
                            Artificial Intelligence for Health
                            AI4Health 2024</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#mission">Mission</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#timeline">Timeline</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                                <img src="images/logos/ai4health.png" width="170">
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#people">Submission</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#venue">Venue</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    eHealth and
                                    <div class="animated-info">
                                        <span class="animated-item">CS</span>
                                        <span class="animated-item">IoT</span>
                                        <span class="animated-item">...</span>
                                    </div>
                                </h1>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">IEEE 25th International Conference
                                on Information Reuse and Integration for Data Science</h2>

                            <p>The aim of this workshop is to bring together academics, students and industry researchers to exchange and share their experiences and research results on all aspects of Artificial Intelligence for HealthCare. This workshop is co-located with IEEE IRI 2024, which will take place in San Jose, CA, USA, August 7-9, 2024.</p>


                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">August 7-9, 2024.</span><br>San Jose, CA, USA</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery" id="mission">
                <div class="container">
                        <h2 class="mb-lg-3 mb-3">Mission </h>
                        <p>
                            The global investment in Information and Communication Technology (ICT) for healthcare and wellbeing (eHealth) is growing rapidly due to its potential to enhance service quality, accessibility, and efficiency in healthcare. Technologies such as cloud computing, edge and fog computing, IoT, blockchain, and especially artificial intelligence, are at the forefront of this revolution, offering innovative solutions for the healthcare sector.

                            eHealth is a key research focus, attracting interdisciplinary teams. The AI4Health 2023 workshop aims to unite researchers from academia, industry, government, and healthcare to discuss the latest advancements in artificial intelligence and soft computing techniques applied to medicine and healthcare. The workshop will explore theoretical and practical aspects of AI, covering topics like machine learning, deep learning, decision support, and optimization, with a focus on next-generation eHealth technologies.

                            This event will be valuable for professionals across various sectors who are interested in the latest trends in eHealth and the integration of cutting-edge technologies in healthcare.
                        </p>
                </div>
                <div class="container">
                    <h2 class="mb-lg-3 mb-3">Topics</h>
                    <p>
                        The topics of interest include, but are not limited to, the application of artificial intelligence and soft computing methodologies to:

                        +Knowledge Management of Health Data;<br>
                        +Data Mining and Knowledge Discovery in Healthcare;<br>
                        +Machine and Deep Learning approaches for Health Data;<br>
                        +Explainable AI models for Health, Biology and Medicine;<br>
                        +Decision Support Systems for Healthcare and Wellbeing;<br>
                        +AI for Precision Medicine;<br>
                        +Optimization for Healthcare problems;<br>
                        +Regression and Forecasting for Medical and/or Biomedical Signals;<br>
                        +Healthcare Information Systems;<br>
                        +Wellness Information Systems;<br>
                        +Information and networking security in healthcare;<br>
                        +Medical Signal and Image Processing and Techniques;<br>
                        +Medical Expert Systems;<br>
                        +Biomedical Applications;<br>
                        +Diagnosis and Therapy Support Systems;<br>
                        +Applications of AI in Healthcare and Wellbeing Systems;<br>
                        +Machine Learning-based Medical Systems;<br>
                        +Medical Data and Knowledge Bases;<br>
                        +Neural Networks in Medicine;<br>
                        +Ambient Intelligence and Pervasive Computing in Medicine and Healthcare;<br>
                        +AI in genomics;<br>
                        +AI for Healthcare Social Networks;<br>
                        +Healthcare Devices and Circuits for Artificial Intelligence.<br>
                    </p>

                </div>
                <div class="container">
                    <h3 class="mb-lg-3 mb-3">Sponsored by :</h>
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="images/logos/siri.png" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src="images/logos/TCPP.png" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>

                    </div>

                </div>
            </section>

            <div class="award-card">
                <img src="images/logos/bestPaper.png" alt="Best Paper Award" class="award-image">
                <div class="award-text">
                    <h2>Best Paper Award</h2>
                    <p>
                        A "Best Paper Award" Certificate will be conferred on the author(s) of a paper presented at the workshop,
                        selected by the Chairs based on scientific significance, originality, and outstanding technical quality of the paper,
                        as assessed also by the evaluations of the members of the Program Committee.
                    </p>
                </div>
            </div>


            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Our Timeline</h2>

                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Paper Submission deadline:</h3>

                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>April 22, 2024</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Paper notification:</h3>

                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-book timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>May 20, 2024</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Camera ready submission deadline: </h3>

                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>June 17, 2024</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Conference events: </h3>


                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>August 7-9, 2024</time>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="people">
                <div class="container">
                    <h2 class="mb-lg-3 mb-3">
                        Registration for IRI'24 is open.
                    </h2>
                        <div class="col-12">
                            Please visit : <a href="https://web.cvent.com/event/b14a76c5-aa57-42e1-a112-0d3ac74baba0/summary" target="_blanck"> summary</a> <br>
                            For more informations , check <a href="https://homepages.uc.edu/~niunn/IRI24/registration.html" target="_blanck">Registration info</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="people">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Workshop Chair and Program Committee</h2>

                            <div class="owl-carousel reviews-carousel">

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Acadia University, Canada</p>

                                    <img src="images/gallery/Lydia-Bouzar-Benlabiod.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Lydia Bouzar-Benlabiod</strong>

                                        <span class="text-muted">Workshop Chair</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Université de Moncton, Canada</p>

                                    <img src="images/gallery/Moulay-Akhloufi.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Moulay Akhloufi</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Ecole nationale Supérieure d'Informatique, ESI, Algeria</p>

                                    <!-- <img src="images/gallery/Moulay-Akhjloufi.jpg" class="img-fluid reviews-image" alt=""> -->

                                    <figcaption class="ms-4">
                                        <strong>Leila Hamdad</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> University M’Hamed Bougara Boumerdes, Algeria</p>

                                    <img src="images/gallery/Khaled-Harrar.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Khaled Harrar</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Ecole Nationale Supérieure de Technologie (ENST), Algeria

                                    <!-- <img src="images/gallery/Moulay-Akhjloufi.jpg" class="img-fluid reviews-image" alt=""> -->

                                    <figcaption class="ms-4">
                                        <strong>Abdellah Kaci</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> University of Beira Interior, Portugal

                                    <img src="images/gallery/Chiranjeevi-Karri.png" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Chiranjeevi Karri</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Rajalakshmi Engineering College, India


                                    <img src="images/gallery/Rakesh-Kumar-Mahendran.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Rakesh Kumar Mahendran</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Acadia University, Canada

                                    <img src="images/gallery/Sazia-Mahfuz.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Sazia Mahfuz</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> Acadia University, Canada


                                    <img src="images/gallery/Andrew-McIntyre.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Andrew McIntyre</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> University of Aveiro, Portugal



                                    <img src="images/gallery/António.png" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>António J. R. Neves</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong></strong></p>

                                    <p class="reviews-text w-100"> University of Rouen Normandy, France




                                    <img src="images/gallery/Edwige-Pissaloux.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Edwige Pissaloux</strong>

                                        <span class="text-muted">Program Committee</span>
                                    </figcaption>
                                </figure>

                               <!-- the rest of program committee here -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding pb-0" id="venue">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Venue</h2>
                            <h6 class="text-center mb-lg-5 mb-4">Sheraton San Jose Hotel</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="images/logos/Hotel.png" alt="Best Paper Award" class="award-image" style="height: 100; width: 100%; border-radius: 5%;">
                        </div>
                        <div class="col-lg-6 col-md-6"><br>
                            <p><strong>Parking & WIFI:</strong> Discounted parking at $12.00 and free WIFI for attendees.</p>

                <p><strong>Nearby Restaurants:</strong> Bistro Restaurant (7am-4pm), Lazio Lounge Bar (4pm-11pm), Koi Palace (1.3 miles).</p>

                <p><strong>Airport Commute:</strong> SJC Airport (3.9 miles) offers rental cars, taxis, and public transport. SFO Airport (33.2 miles). BART and VTA transit available.</p>

                <p><strong>Tourist Attractions:</strong> McCarthy Ranch (2.5 miles), Great Mall (2.8 miles), Santana Row (7.8 miles), Big Dog Vineyards (8.4 miles).</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Contact</h2>
                            {{-- <h6 class="text-center mb-lg-3 mb-2">Lydia.bouzar-benlabiod@acadiau.ca</h6> --}}
                        </div>

                        <div class="col-lg-8 mx-auto">
                            <form method="POST" action="{{ route('contact.send') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Your Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                    <button class="send">
                                    <span> Send
                                    </span>
                                    </button>
                            </form>

                            @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>



        </main>

        <footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </body>
</html>

<!-- <img src="images/logos/Hotel.png" alt="Best Paper Award" class="award-image" style="height: 160%; width: 100%;"> -->
