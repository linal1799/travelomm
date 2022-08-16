<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:52 GMT -->
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
 <br><br>

<div class="container">
    @if (session('bookingsuccess'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>&nbsp;&nbsp;
        <div><strong>{{ session('bookingsuccess') }}</strong></div>
    </div><br>
@endif
   <center><div class="col-md-4">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <h3><span class="right-sidebar item__from">From</span><span class="right-sidebar item__sale">Rs.2999</span>Rs.1999</h3>
                                {{-- <form method="post" class="right-sidebar item-form" action="#"> --}}
                                    <form class="right-sidebar item-form" method="Post" action="{{route('store')}}">
                                        @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input name="name" type="text" placeholder="Full Name" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input name="email" type="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-md-12 form-group input1_inner">
                                            <input type="text" name="date"class="form-control input datepicker" placeholder="Travel Date" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input name="people" type="text" placeholder="People" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Your Enquiry"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="butn-dark"><a href="#0"><span>Book Now</span></a></button>
                                        </div>
                                        <li><a href="/tour-details"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Back</a></li>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div></center>
                </div>
    <!-- Footer -->
    {{-- @include('footer') --}}
  <!-- Bottom footer -->
  <div class="bottom-footer-text">
    <div class="row copyright">
        <div class="col-md-12">
            <p class="mb-0">©2022 <a href="#">Travelomm</a>. All rights reserved.</p>
        </div>
    </div>
</div>
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

<!-- Mirrored from duruthemes.com/demo/html/travol/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:52 GMT -->
</html>
