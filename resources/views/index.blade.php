<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Travelomm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
        $(document).ready(function(){
		$("#myModal").modal('show');
	});
    $(document).ready(function(){
		$("#myModal").modal('show');
	});
     </script>
     <style>
#modal1 {
    background-color:rgb(47, 42, 42);
}
        * {
          box-sizing: border-box;
        }

        body {
          background-color: #f1f1f1;
        }

        #regForm {
          background-color: #ffffff;
          margin: 100px auto;
          font-family: Raleway;
          padding: 40px;
          width: 70%;
          min-width: 300px;
        }

        h1 {
          text-align: center;
        }

        input {
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: Raleway;
          border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
          background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
          display: none;
        }

        button {
          background-color: #04AA6D;
          color: #ffffff;
          border: none;
          padding: 10px 20px;
          font-size: 17px;
          font-family: Raleway;
          cursor: pointer;
        }

        button:hover {
          opacity: 0.8;
        }

        #prevBtn {
          background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbbbbb;
          border: none;
          border-radius: 50%;
          display: inline-block;
          opacity: 0.5;
        }

        .step.active {
          opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
          background-color: #04AA6D;
        }
        </style>
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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="collapse navbar-collapse">
                <a href="/index">
                    <div  id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "> <a class="nav-link" href="/index">TRAVELOMM </a></li>

                        </ul>
                    <!-- <ul>
                        <li class="nav-item">TRAVELOMM</li>
                    </ul> -->
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "> <a class="nav-link" href="/index">Home </a></li>

                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item "> <a class="nav-link" href="/tours">Tours </a></li>


                    <li class="nav-item"><a class="nav-link" href="/destinations">Destinations</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>

                    <!-- <li class="nav-item dropdown"> <span class="nav-link"> Blog <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="blog.html">Blog 1</a></li>
                            <li class="dropdown-item"><a href="blog2.html">Blog 2</a></li>
                            <li class="dropdown-item"><a href="post.html">Single Post</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/agent"><i class='far fa-address-book'></i>Travel Agent/Join Us</a></li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="img/slider/trav.png">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>Let's travel the India with us</h4>
                                <h1>Explore The India With <span>Travel</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="img/slider/d.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>Let's travel the India with us</h4>
                                <h1>Explore India With <span>Travel</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="img/slider/pa.jpeg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>Let's travel the India with us</h4>
                                <h1><span>Discover</span> the India with our guide</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Tour Search -->

    <div class="booking-wrapper">
        <div class="container">
            <div class="tour-inner clearfix form-inline justify-content-center">
                <form action="{{route('search.destination')}}" class="form1 clearfix" >

                    <div class="col1 c2">
                        <div class="select1_wrapper">
                            <label>Destinations</label>
                            <div class="select1_inner">
                                <select class="select2 select" name="val1"  style="width: 100%" >
                                    <option value="0">Destinations</option>
                                    @foreach ($data as $d)

                                    <option value="{{$d->id}}" >{{$d->name}}</option>
                                    @endforeach

                                    {{-- <option value="2">Himachal</option>
                                    <option value="3">North East</option>
                                    <option value="4">Kerala</option>
                                    <option value="4">Kashmir</option>
                                    <option value="5">Goa</option>
                                    <option value="5">Rajasthan</option>
                                    <option value="5">Uttarakhand</option>
                                    <option value="5">Andman</option>
                                    <option value="5">South India</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col1 c5">
                        <button type="submit" class="btn-form1-submit"><i class="ti-search"></i> Find Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about cover section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">The best travel agency</div>
                    <div class="section-title">Discover the <span>India</span> with our guide</div>
                    <p>You can choose any city with good tourism. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>5 Years of Experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>150+ Tour Destinations</p>
                            </div>
                        </li>
                    </ul>
                    <!-- Info -->
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <p>For information</p> <a href="tel:855-333-4444">855 333 4444</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"> <img src="img/about.jpg" class="img-fluid" alt=""> </div>
                        </div>
                        <div id="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none" />
                                <g>
                                    <use xlink:href="#circlePath" fill="none" />
                                    <text fill="#0f2454">
                                        <textPath xlink:href="#circlePath"> . travel agency . travel agency </textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tours 3 -->
    <div class="tours3 section-padding bg-lightnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Choose your place</span></div>
                    <div class="section-title">Popular <span>Tours</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/leh.jpg"> <span class="category"><a href="#0">Leh Ladakh</a></span>
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Leh LADAKH</h4>
                                    <h6>Rs.13,000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Leh Ladakh</h4>
                                <h6>Rs.13,000 / per person</h6>
                                <p> Ladakh is known as the world's coldest desert.Ladakh is an adventure playground for rafting and high-altitude trekking. </p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 3 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> Union territory</li>
                                            <li><i class="ti-face-smile"></i> 9.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details1">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/hima.jfif">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Himachal</h4>
                                    <h6>Rs.10000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Himachal</h4>
                                <h6>Rs.10000  / per person</h6>
                                <p>Tourism in Himachal Pradesh was restricted only to a limited movement
                                     of pilgrims to a few spiritual destinations in around the hills.</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 5 Days</li>
                                            <li><i class="ti-user"></i> 7+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> Himachal</li>
                                            <li><i class="ti-face-smile"></i> 9.8 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/north.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>North East</h4>
                                    <h6>Rs.2000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>North East</h4>
                                <h6>Rs.2000 / per person</h6>
                                <p>Experience the best of the North East trip in 2022 by exploring places
                                    like Sikkim, Tawang, Kaziranga National Park and more.</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 10 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> easternmost region</li>
                                            <li><i class="ti-face-smile"></i> 9.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="tour-details">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/kerala.jfif">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Kerala</h4>
                                    <h6>Rs.5000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Kerala</h4>
                                <h6>Rs.5000 / per person</h6>
                                <p>Kerala Tourism official website provides text, photos, video,
                                     on travel destinations, hotels, accommodation, culture, heritage</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 3 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> Thiruvananthapuram</li>
                                            <li><i class="ti-face-smile"></i> 9.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details4">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/kashmir.jpeg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Kashmir</h4>
                                    <h6>Rs.8000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Kashmir</h4>
                                <h6>Rs.8000 / per person</h6>
                                <p>Cool off in the mesmerising Betaab Valley, enjoy the breeze by the Dal Lake & more.</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 5 Days</li>
                                            <li><i class="ti-user"></i> 9+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> Union territory</li>
                                            <li><i class="ti-face-smile"></i> 9.3 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details5">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/goa.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Goa</h4>
                                    <h6>Rs.4000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Goa</h4>
                                <h6>Rs.4000 / per person</h6>
                                <p>Perfect Goa tour packages for you. Find a host of tour packages for Goa with us and visit Panjim, Anjuna, with best prices</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 6+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> panaji</li>
                                            <li><i class="ti-face-smile"></i> 8.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details6">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/uttar.jfif">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Uttarakhand</h4>
                                    <h6>Rs.6000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Uttarakhand</h4>
                                <h6>Rs.6000 / per person</h6>
                                <p> Plan a vacation with Uttarakhand tour packages at best prices, full day sightseeing, transfers & more.</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> deharadun</li>
                                            <li><i class="ti-face-smile"></i> 8.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details7">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/raj.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Rajasthan</h4>
                                    <h6>Rs.9000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Rajasthan</h4>
                                <h6>Rs.9000 / per person</h6>
                                <p>Perfect Goa tour packages for you. Find a host of tour packages for rajsthan with us and visit lake Pichola, jaislalmair, with best prices</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 6+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> jaipur</li>
                                            <li><i class="ti-face-smile"></i> 8.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details8">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/andman.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Andman </h4>
                                    <h6>Rs.5000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>Andman </h4>
                                <h6>Rs.5000 / per person</h6>
                                <p>Andaman tour package from Coimbatore is a seven-day long trip to some of the most popular places of Andaman, such as Port Blair, Havelock Island.</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 3 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> bay of bengal</li>
                                            <li><i class="ti-face-smile"></i> 8.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details9">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/destination/south.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>South India</h4>
                                    <h6>Rs.12,000 / per person</h6>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2 bg-white">
                            <div class="square-container2">
                                <h4>South India</h4>
                                <h6>Rs.12,000 / per person</h6>
                                <p>Book online for best north India tour packages from southerntravelsindia South India, enjoy your holiday at best heritage and historical resort place</p>
                                <div class="row tour-list mb-30">
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 6+</li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> andhra,karnataka</li>
                                            <li><i class="ti-face-smile"></i> 8.5 Superb</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-line"><a href="/tour-details10">Tour details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Numbers -->
    <section class="numbers">
        <div class="section-padding bg-img bg-fixed back-position-center" data-background="img/slider/in.jpg" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item text-center"> <img src="img/arrow1.png" class="tobotm" alt=""> <span class="icon">
                                <i class="front flaticon-air-freight"></i>
                                <i class="back flaticon-air-freight"></i>
                            </span>
                            <h3 class="count">600</h3>
                            <h6>Flight Booking</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> <img src="img/arrow1.png" alt=""> <span class="icon">
                                <i class="font flaticon-house"></i>
                                <i class="back flaticon-house"></i>
                            </span>
                            <h3 class="count">250</h3>
                            <h6>Amazing Tour</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> <img src="img/arrow1.png" class="tobotm" alt=""> <span class="icon">
                                <i class="front flaticon-ship"></i>
                                <i class="back flaticon-ship"></i>
                            </span>
                            <h3 class="count">100</h3>
                            <h6>Cruises Booking</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> <span class="icon">
                                <i class="front flaticon-tag"></i>
                                <i class="back flaticon-tag"></i>
                            </span>
                            <h3 class="count">100</h3>
                            <h6>Ticket Booking</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Italy &  France Tours 2 -->
    <section class="tours2 section-padding bg-lightnav" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Most Popular</span></div>
                    <div class="section-title">Travel <span>Cities</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="tours2 left">
                            <figure><img src="img/tours/leh.jpg" alt="" class="img-fluid"></figure>
                            <div class="caption padding-left">
                                <div class="country country1">
                                    <h3>Best Tours</h3>
                                    <h4><a href="/tour-details1">Leh LADAKH</a></h4>
                                    <p> Leh Ladakh Nubra Pangong · Honeymoon Special Leh Ladakh · Seniors' Special Leh Ladakh ·</p>
                                    <div class="row tour-list">
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Leh palace</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Namgyal tsemo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Shanti stup</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Sankar gompa</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">San Marino</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">zoravar fort</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="border-2">
                                    <div class="info-wrapper">
                                        <div class="more"><a href="/tour-details2" class="link-btn" tabindex="0">View all places <i class="ti-arrow-right"></i></a></div>
                                        {{-- <div class="butn-dark"> <a href="booking.html" data-scroll-nav="1"><span>Book Now</span></a> </div> --}}
                                        <div class="col-md-6">
                                            <button class="butn-dark"><a href="/booking"><span>Book Now</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tours2">
                            <figure><img src="img/tours/hima.jfif" alt="" class="img-fluid"></figure>
                            <div class="caption padding-left">
                                <div class="country country2">
                                    <h3>Best Tours</h3>
                                    <h4><a href="/tour-details3">himachal</a></h4>
                                    <p>Manali. Located in Kullu district, at an altitude of 2,050 meters, Manali captivates you with its snow-capped mountains and impressive views. </p>
                                    <div class="row tour-list">
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">kaza </a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">tirthan valley</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">sethan valley</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">khajjar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">kufri</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">tosh</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="border-2">
                                    <div class="info-wrapper">
                                        <div class="more"><a href="/tour-details4" class="link-btn" tabindex="0">View all places <i class="ti-arrow-right"></i></a></div>
                                        <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Tour Video -->
    <section class="dynamic-video-wrapper" data-overlay-dark="3">
        <video width="100%" height="100%" autoplay="autoplay" muted preload="auto" loop="loop">
            <source src="img/travel-video.mp4" type="video/mp4">
        </video>
        <div class="wrap-content v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <h1>Arambol Beach</h1>
                        <h4><i class="ti-location-pin"></i> GOA &nbsp;&nbsp; <i class="ti-timer"></i> 4 Days + 3 Nights</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destination 1 -->
    <section class="destination1 section-padding bg-lightnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Top Destination</div>
                    <div class="section-title">Popular <span>Destination</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/goa.jpg" alt=""></div> <span class="category"><a href="#0">New</a></span>
                            <div class="con">
                                <h5><a href="/tour-details5"><i class="ti-location-pin"></i> Goa</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>4 Tour Packages</p>
                                    </div>
                                    <div class="col col-md-4 text-right">
                                        <div class="permalink"><a href="/tour-details5">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/destination/hima.jfif" alt=""> </div> <span class="category"><a href="#0">25% OFF</a></span>
                            <div class="con">
                                <h5><a href="/tour-details6"><i class="ti-location-pin"></i> Himachal</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>3 Tour Packages</p>
                                    </div>
                                    <div class="col col-md-4 text-right">
                                        <div class="permalink"><a href="/tour-details6">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/kashmir.jpeg" alt=""></div> <span class="category"><a href="#0">7 Tours</a></span>
                            <div class="con">
                                <h5><a href="#0"><i class="ti-location-pin"></i> Kashmir</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>7 Tour Packages</p>
                                    </div>
                                    <div class="col col-md-4 text-right">
                                        <div class="permalink"><a href="/tour-details7">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/uttar.jfif" alt=""></div> <span class="category"><a href="#0">New</a></span>
                            <div class="con">
                                <h5><a href="#0"><i class="ti-location-pin"></i> Uttarakhand</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>6 Tour Packages</p>
                                    </div>
                                    <div class="col col-md-4 text-right">
                                        <div class="permalink"><a href="/tour-details8">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/andman.jpg" alt=""></div> <span class="category"><a href="#0">15% OFF</a></span>
                            <div class="con">
                                <h5><a href="#0"><i class="ti-location-pin"></i> Andman</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>10 Tour Packages</p>
                                    </div>
                                    <div class="col col-md-4 text-right">
                                        <div class="permalink"><a href="/tour-details9">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/raj.jpg" alt=""></div> <span class="category"><a href="/tours2">7 Tours</a></span>
                            <div class="con">
                                <h5><a href="/tour-details10"><i class="ti-location-pin"></i> Rajsthan</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>7 Tour Packages</p>
                                    </div>
                                    <div class="col col-md-4 text-right">
                                        <div class="permalink"><a href="tour-details10.html">Explore <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding bg-navy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Travel Blog</span></div>
                    <div class="section-title"><span>Travel</span> Experience</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/k.jpg" alt="">
                                <div class="date">
                                    <a href="/post"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="/blog">Travel</a>
                                </span>
                                <h5><a href="/post">Practical information for traveling to kashmir</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/h.jpg" alt="">
                                <div class="date">
                                    <a href="/post"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="/blog">Tours</a>
                                </span>
                                <h5><a href="/post">Most Popular  Routes</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/t.jpg" alt="">
                                <div class="date">
                                    <a href="/post"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="/blog">Travel</a>
                                </span>
                                <h5><a href="/post">Tips Towards a Flawless Honeymoon</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/u.jpg" alt="">
                                <div class="date">
                                    <a href="/post"> <span>Dec</span> <i>10</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="/blog">Travel</a>
                                </span>
                                <h5><a href="/post">5 things you can not miss in nainital,rishikesh.</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/1.jpg" alt="">
                                <div class="date">
                                    <a href="/post"> <span>Dec</span> <i>15</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="/blog">Tours</a>
                                </span>
                                <h5><a href="/post">Family Adventure Tours for Teens & Kids</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/6.jpg" alt="">
                                <div class="date">
                                    <a href="/post"> <span>Dec</span> <i>18</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="/blog">Tours</a>
                                </span>
                                <h5><a href="/post">Small group tours with flights </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/north.jpg" data-overlay-dark="5">
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
                                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/andman.jpg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Nolan White</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/hima.jfif" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Emily Brown</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/kashmir.jpeg" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
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
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="modal1">
                    <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('footer')
    {{-- <footer class="footer clearfix">
        <div class="container">
            <!-- First footer -->
            <div class="first-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div class="links dark footer-contact-links">
                            <div class="footer-contact-links-wrapper">
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Call us</h6>
                                        <p>+1 123-456-0606</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="flaticon-message"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Write to us</h6>
                                        <p>info@travelomm.com</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="flaticon-placeholder"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Address</h6>
                                        <p>Delhi,india</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second footer -->
            <div class="second-footer">
                <div class="row">
                    <!-- about & social icons -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">Travelomm </div>
                            <div class="widget-text">
                                <p>Quisque imperdiet sapien porttito the bibendum sellentesque the commodo erat acar accumsa lobortis, enim diam the nesuen.</p>
                                <div class="social-icons">
                                    <ul class="list-inline">
                                        <li><a href="https://www.instagram.com/accounts/login/"><i class="ti-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/i/flow/login"><i class="ti-twitter"></i></a></li>
                                        <li><a href="https://en-gb.facebook.com/login/device-based/regular/login/?login_attempt=1"><i class="ti-facebook"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="ti-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quick links -->
                    <div class="col-md-3 offset-md-1 widget-area">
                        <div class="widget clearfix usful-links">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="/about">About</a></li>
                                <li><a href="/tours">Tours</a></li>
                                <li><a href="/destinations">Destinations</a></li>
                                <li><a href="/blog">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- subscribe -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe</h3>
                            <p>Sign up for our monthly blogletter to stay informed about travel and tours</p>
                            <div class="widget-newsletter">
                                <form>

                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <button type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom footer -->
            <div class="bottom-footer-text">
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="mb-0">©2022 <a href="#">Travelomm</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
        {{-- <footer class="footer clearfix">
        <div class="container">
            <!-- First footer -->
            <div class="first-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div class="links dark footer-contact-links">
                            <div class="footer-contact-links-wrapper">
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Call us</h6>
                                        <p>+1 123-456-0606</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="flaticon-message"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Write to us</h6>
                                        <p>info@travelomm.com</p>
                                    </div>
                                </div>
                                <div class="footer-contact-links-divider"></div>
                                <div class="footer-contact-link-wrapper">
                                    <div class="image-wrapper footer-contact-link-icon">
                                        <div class="icon-footer"> <i class="flaticon-placeholder"></i> </div>
                                    </div>
                                    <div class="footer-contact-link-content">
                                        <h6>Address</h6>
                                        <p>Delhi,india</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second footer -->
            <div class="second-footer">
                <div class="row">
                    <!-- about & social icons -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">Travelomm </div>
                            <div class="widget-text">
                                <p>Quisque imperdiet sapien porttito the bibendum sellentesque the commodo erat acar accumsa lobortis, enim diam the nesuen.</p>
                                <div class="social-icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quick links -->
                    <div class="col-md-3 offset-md-1 widget-area">
                        <div class="widget clearfix usful-links">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="tours.html">Tours</a></li>
                                <li><a href="destination.html">Destinations</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- subscribe -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe</h3>
                            <p>Sign up for our monthly blogletter to stay informed about travel and tours</p>
                            <div class="widget-newsletter">
                                <form action="#">
                                    <input type="email" placeholder="Email Address" required>
                                    <button type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom footer -->
            <div class="bottom-footer-text">
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="mb-0">©2022 <a href="#">Travelomm</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
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
