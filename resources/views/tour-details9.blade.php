<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/tour-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Travelomm</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    @include('header')
    <!-- Tour Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/goa.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/ba.jpeg"></div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/back.jpeg"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Tour Content -->
    <section class="tour-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-30">
                    <div class="section-subtitle">Travel Agency</div>
                    <div class="section-title mb-0">Sonali Jani <span>Andman</span></div>
                    <div class="rating mb-30"> <i class="star active"></i> <i class="star active"></i> <i
                            class="star active"></i> <i class="star active"></i> <i class="star active"></i>
                        <div class="reviews-count color-2">(2 Reviews)</div>
                    </div>
                    <div class="tour-page head-icon">
                        <p><i class="ti-time"></i> 3 Days 2 Nights</p>
                        <p><i class="ti-user"></i> Group: 5 - 10 People</p>
                        <p><i class="ti-location-pin"></i> Andman</p>
                        <p><i class="ti-face-smile"></i> 9.3 Superb</p>
                    </div>
                    <h6>Information</h6>
                    <p class="mb-30">Travel non lorem ac erat suscipit bibendum nulla facilisi. Sedeuter nunc volutpat
                        miss sapien conseyen turpeutionyer masin libero sevenion vusetion viventa augue sit amet
                        hendrerit vestibulum. Duisterione venenatis lacus gravida eros ut turpis interdum ornare.</p>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>5 Days 4 Nights, Group: 5 - 10 People, Andman</p>
                            </div>
                        </li>
                    </ul>
                    <p class="mb-30">Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu
                        site feugiat rana volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla
                        facilisi nedeuter nunc vousa molis sapien velet conseyer turpeutionyer masin libero sempe molis.
                    </p>
                    <!-- tour-page time-table -->
                    <div class="tour-page time-table"> <span>Departure</span>
                        <p> Kangra Airport</p>
                    </div>
                    <div class="tour-page time-table"> <span>Departure Time</span>
                        <p>7.00AM</p>
                    </div>
                    <div class="tour-page time-table"> <span>Return Time</span>
                        <p>Approximately 9.30PM</p>
                    </div>
                    <div class="tour-page time-table"> <span>Dress Code</span>
                        <p>Casual, comfortable and light</p>
                    </div>
                    <div class="tour-page time-table-price"> <span>Price Includes</span>
                        <ul class="tour-page time-table-price-include">
                            <li><i class="ti-check"></i> Accommondatio</li>
                            <li><i class="ti-check"></i> Porter &amp; Personal Guide</li>
                            <li><i class="ti-check"></i> Insurance</li>
                            <li><i class="ti-check"></i> Breakfast</li>
                            <li><i class="ti-check"></i> Tranportation / Car</li>
                        </ul>
                    </div>
                    <div class="tour-page time-table-price"> <span>Price Excludes</span>
                        <ul class="tour-page time-table-price-exclude">
                            <li><i class="ti-close"></i> Flights </li>
                            <li><i class="ti-close"></i> Lunch</li>
                            <li><i class="ti-close"></i> Typical Souvenir </li>
                            <li><i class="ti-close"></i> Sunscreen, toiletries and personal items</li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <!-- Gallery -->
                    <h6 class="mb-0">Tour Gallery</h6>
                    <div class="row">
                        <div class="col-md-4 gallery-item">
                            <a href="img/tours/hima.jfif" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/hima.jfif"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item">
                            <a href="img/tours/a.jpg" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/a.jpg"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-item">
                            <a href="img/tours/a1.jpg" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/a1.jpg"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <!-- FAQ's -->
                    <h6>Tour Plan</h6>
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">Day 1: Departure</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Travel non lorem ac erat suscipit bibendum nulla facilisi.
                                        Sedeuter nunc volutpat miss sapien vel conseyen turpeutionyer masin libero
                                        sevenion vusetion viventa augue sit amet hendrerit vestibulum. Duisteyerion
                                        venenatis lacus gravida eros ut turpis interdum ornare.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Day 2: Adventure Beggins</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Travel non lorem ac erat suscipit bibendum nulla facilisi.
                                        Sedeuter nunc volutpat miss sapien vel conseyen turpeutionyer masin libero
                                        sevenion vusetion viventa augue sit amet hendrerit vestibulum. Duisteyerion
                                        venenatis lacus gravida eros ut turpis interdum ornare.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Day 3: Sea Tour</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Travel non lorem ac erat suscipit bibendum nulla facilisi.
                                        Sedeuter nunc volutpat miss sapien vel conseyen turpeutionyer masin libero
                                        sevenion vusetion viventa augue sit amet hendrerit vestibulum. Duisteyerion
                                        venenatis lacus gravida eros ut turpis interdum ornare.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Day 4: Return</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Travel non lorem ac erat suscipit bibendum nulla facilisi.
                                        Sedeuter nunc volutpat miss sapien vel conseyen turpeutionyer masin libero
                                        sevenion vusetion viventa augue sit amet hendrerit vestibulum. Duisteyerion
                                        venenatis lacus gravida eros ut turpis interdum ornare.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <h3><span class="right-sidebar item__from">From</span><span class="right-sidebar item__sale">Rs.2999</span>Rs.1999</h3>
                                <form method="get" class="right-sidebar item-form" action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="butn-dark"><a href="/booking"><span>Book Now</span></a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <div class="col-md-12">
                                    <button class="butn-dark"><a href="/booking"><span>Book Now</span></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/goa.jpg"
            data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <!-- Call Now  -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                                class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>We Provide Top Destinations Expecially For You Book Now and Enjoy!</h5>
                        <div class="phone-call mb-10">
                            <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                            <div class="text">
                                <p class="color-1">Call Now</p> <a class="color-1" href="tel:855-333-4444">855 333
                                    4444</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>Travelers Reviews</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>Travel dapibus asue metus the nec feusiate era the miss hendreri the vemante the
                                        lemon insan toleon nectan feugiat erat hendrerit necuis vesaire tours inilla
                                        neca ine the sene miss habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/t.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i
                                                    class="star active"></i> <i class="star active"></i> <i
                                                    class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Nolan White</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Travel dapibus asue metus the nec feusiate era the miss hendreri the vemante the
                                        lemon insan toleon nectan feugiat erat hendrerit necuis vesaire tours inilla
                                        neca ine the sene miss habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/k.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i
                                                    class="star active"></i> <i class="star active"></i> <i
                                                    class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Emily Brown</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Travel dapibus asue metus the nec feusiate era the miss hendreri the vemante the
                                        lemon insan toleon nectan feugiat erat hendrerit necuis vesaire tours inilla
                                        neca ine the sene miss habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/h.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i
                                                    class="star active"></i> <i class="star active"></i> <i
                                                    class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Olivia Martin</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('footer')
    <!-- jQuery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/travol/tour-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:56 GMT -->

</html>
