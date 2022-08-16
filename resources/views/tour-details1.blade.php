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
    </script>
     <style>
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
                    <div class="section-title mb-0">Sonali Jani <span>Leh Ladakh</span></div>
                    <div class="rating mb-30"> <i class="star active"></i> <i class="star active"></i> <i
                            class="star active"></i> <i class="star active"></i> <i class="star active"></i>
                        <div class="reviews-count color-2">(2 Reviews)</div>
                    </div>
                    <div class="tour-page head-icon">
                        <p><i class="ti-time"></i> 5 Days 4 Nights</p>
                        <p><i class="ti-user"></i> Group: 5 - 10 People</p>
                        <p><i class="ti-location-pin"></i> Leh Ladakh</p>
                        <p><i class="ti-face-smile"></i> 9.3 Superb</p>
                    </div>
                    <h6>Want to Explore</h6>
<p>please select one of the following places you want to explore in Leh Ladakh</p>
                    <div class="card-body">
                        <div class="col-md-4 gallery-item">
                            <a href="img/tours/hima.jfif" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/to1.jfif"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="demo-inline-spacing">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked="">
                            <label class="form-check-label" for="inlineCheckbox1">Leh</label>
                          </div>
                          <div class="tour-page head-icon">
                            <p><i class="ti-time"></i> 5 Days 4 Nights</p>
                        </div>
                          <div class="col-md-4 gallery-item">
                            <a href="img/tours/hima.jfif" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/nubra.jfif"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="unchecked">
                            <label class="form-check-label" for="inlineCheckbox2">Nubra Valley</label>
                          </div>
                          <div class="tour-page head-icon">
                            <p><i class="ti-time"></i> 5 Days 4 Nights</p>
                        </div>

                        </div>
                      </div>
                      <div class="card-body">
                        <div class="col-md-4 gallery-item">
                            <a href="img/tours/hima.jfif" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/angong.jfif"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="demo-inline-spacing">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked="">
                            <label class="form-check-label" for="inlineCheckbox1">pangong Lake</label>
                          </div>
                          <div class="tour-page head-icon">
                            <p><i class="ti-time"></i> 5 Days 4 Nights</p>
                        </div>
                          <div class="col-md-4 gallery-item">
                            <a href="img/tours/hima.jfif" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/tours/kargil.jfif"
                                            class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                </div>
                            </a>
                        </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="unchecked">
                            <label class="form-check-label" for="inlineCheckbox2">Kargil</label>
                          </div>
                          <div class="tour-page head-icon">
                            <p><i class="ti-time"></i> 5 Days 4 Nights</p>
                        </div>
                          <br>
                          <button type="button" class="btn btn-danger waves-effect waves-float waves-light">Continue</button>
                          &nbsp;&nbsp;&nbsp;

                          <button type="button" class="btn btn-dark waves-effect waves-float waves-light" data-toggle="modal" data-target="#myModal">Enquiry</button>
                        </div>

                      </div>

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
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Enquiry</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
              <!-- <p>This is a small modal.</p> -->
               <!-- <form id="regForm" action="/action_page.php">
                <h1>Register:</h1>
                <!-- One "tab" for each step in the form: -->
                <div class="tab">Name:
                    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>

                  </div>
                  <div class="tab">place for enquiry:
                    <p><input placeholder="destination..." oninput="this.className = ''" name="destination"></p>
                    <p><input placeholder="No. of People..." oninput="this.className = ''" name="people"></p>
                  </div>
                  <div class="tab">Type of Tour:
                    <div class="form-group mb-3">
                        <h5>Tour Type</h5>
                        <select name="category_id"  id="category-dd" class="form-control">
                            <option >Select Type</option>
                            <option >Family</option>
                            <option >Honeymoon</option>
                            <option >Other</option>
                        </select>
                    </div>
                    </div>
                  <div class="tab">Enquiry details:
                    <p><input placeholder="enquiry..." oninput="this.className = ''" name="enquiry"></p>
                  </div>
                  <div style="overflow:auto;">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>


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
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
    </script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/travol/tour-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:56 GMT -->

</html>
