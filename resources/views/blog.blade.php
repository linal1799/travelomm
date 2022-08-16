<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:44:10 GMT -->
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
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="img/slider/tr.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Read travel blog</h5>
                    <h1>Travel <span>Experience</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog -->
    <section class="blog section-padding bg-lightnav">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/leh.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Travel</a>
                                </span>
                                <h5><a href="post.html">Practical information for traveling to Leh Ladakh</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/hima.jfif" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Tours</a>
                                </span>
                                <h5><a href="post.html">Most Popular Yacht  Routes</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/goa.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Travel</a>
                                </span>
                                <h5><a href="post.html">Tips Towards a Flawless Honeymoon</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/uttar.jfif" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>10</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Travel</a>
                                </span>
                                <h5><a href="post.html">5 things you can not miss in rishikesh</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/1.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>15</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Tours</a>
                                </span>
                                <h5><a href="post.html">Family Adventure Tours for Teens & Kids</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/6.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>18</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Tours</a>
                                </span>
                                <h5><a href="post.html">Small group tours with flights </a></h5>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-12 text-center">
                    <!-- Pagination -->
                    <ul class="blog-pagination-wrap align-center mb-30 mt-30">
                        <li><a href="blog.html#"><i class="ti-angle-left"></i></a></li>
                        <li><a href="blog.html#">1</a></li>
                        <li><a href="blog.html#" class="active">2</a></li>
                        <li><a href="blog.html#">3</a></li>
                        <li><a href="blog.html#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div> --}}
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

<!-- Mirrored from duruthemes.com/demo/html/travol/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:44:10 GMT -->
</html>
