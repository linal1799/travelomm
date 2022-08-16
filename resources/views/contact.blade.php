<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:44:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Travelomm</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
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
    <!-- Header Banner -->
    <div class="banner-header section-padding back-position-center valign bg-img bg-fixed" data-overlay-dark="5" data-background="img/slider/south.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact <span>Us</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Travel Agency Inc.</h3>
                    <p>Travel duru nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <p>Phone</p> <a href="tel:855-333-4444">855 333 4444</a>
                        </div>
                    </div>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-message"></span></div>
                        <div class="text">
                            <p>e-Mail Address</p> <a href="mailto:info@luxuryhotel.com">info@luxuryhotel.com</a>
                        </div>
                    </div>
                    <div class="phone-call">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="text">
                            <p>Location</p>delhi
                            <br>India
                        </div>
                    </div>
                </div>
                {{-- @include('message') --}}
                <div class="col-md-5 mb-30 offset-md-1">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <h2>Get in touch</h2>
                                <form method="post" class="right-sidebar item-form contact__form" action="{{route('message.store')}}">
                                    @csrf
                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                        </div>
                                    </div>
                                    <!-- form elements -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" placeholder="Your Name *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" placeholder="Your Email *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="phone" type="text" placeholder="Your Number *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="subject" type="text" placeholder="Subject *" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="butn-dark"><a href="#0"><span>Send Message</span></a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.7391074024!2d76.81306874896306!3d28.646677251183196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1659076276630!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/goa.jpg" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <!-- Call Now  -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>We Provide Top Destinations Expecially For You Book Now and Enjoy!</h5>
                        <div class="phone-call mb-10">
                            <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                            <div class="text">
                                <p class="color-1">Call Now</p> <a class="color-1" href="tel:855-333-4444">855 333 4444</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Travelomm</h6>
                                <h4>Travelers Reviews</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/me.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Meena kumari</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/lad.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Shashwat meshram</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/raju.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Nishant bajwa</h6> <span>Guest review</span>
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

<!-- Mirrored from duruthemes.com/demo/html/travol/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:44:16 GMT -->
</html>
