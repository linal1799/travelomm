


<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:53 GMT -->
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
    <style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 400px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

        .checked {
  color: orange;
}
        .button {
  background-color: #db7e14; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 5px 40px;
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
                <a href="index2.html">
                    <div  id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "> <a class="nav-link" href="index2.html">TRAVELOMM </a></li>

                        </ul>
                    <!-- <ul>
                        <li class="nav-item">TRAVELOMM</li>
                    </ul> -->
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->

        </div>
    </nav>

    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed back-position-center" data-overlay-dark="5" data-background="img/slider/agent.png">
        <div class="container">
            <div class="row">
                <div class="col-md-7 caption mt-90">
                    <h5>Plan A new Trip</h5>
                    <h1>Become a Travel Agent <br><span>& </span> <br>Get 100% Genuine Travel Leads</h1>
                    <!-- <a href="#" class="button button3">Join Us To Get Free Leads</a> -->
                    <a href=""  type="button" class="button button3" data-toggle="modal" data-target="#myModal">Join Us To Get Free Leads</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <center><h2>Hotel category you want to select</h2>

    <label class="container">1-3 Days
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container">This Week
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container">This Month
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container">Not Now
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container">Just for Enquiry
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <br>
      <button type="button" class="btn btn-danger waves-effect waves-float waves-light">Continue</button>

</center> -->




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

<!-- Mirrored from duruthemes.com/demo/html/travol/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 11:43:55 GMT -->
</html>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h1>Company Information</h1>
          <!-- <h4 class="modal-title">Enquiry</h4> -->

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <!-- <p>This is a small modal.</p> -->
           <form action="{{route('agent.store')}}" method="Post">
            @csrf
            {{-- <h1>Register:</h1> --}}
            <!-- One "tab" for each step in the form: -->

            <div class="tab">Basic Details:
                <p><input placeholder="company name..." oninput="this.className = ''" name="name"></p>
                <p><input placeholder="company owner..." oninput="this.className = ''" name="owner"></p>
                <p><input placeholder="website" oninput="this.className = ''" name="website"></p>
                <p><input placeholder="destinations you sell the most" oninput="this.className = ''" name="destinations"></p>
                <p><input placeholder="your name/ designation" oninput="this.className = ''" name="designations"></p>

                <p><input placeholder="Email id" oninput="this.className = ''" name="email"></p>

                {{-- <p><input placeholder="Phone no" oninput="this.className = ''" name="phone"></p> --}}
                <p><input placeholder="Skype handler" oninput="this.className = ''" name="skype"></p>


              </div>
              <div class="tab">Additional Information:
                <p><input placeholder="How old is your agency?" oninput="this.className = ''" name="old"></p>
                <p><input placeholder="Number of employees" oninput="this.className = ''" name="employee"></p>
                <p><input placeholder="your current travellers are from which region?" oninput="this.className = ''" name="region"></p>
                <p><input placeholder="Company prrofile" oninput="this.className = ''" name="profile"></p>
                <p><input placeholder="How can we help" oninput="this.className = ''" name="help"></p>

            </div>
              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  <button type="submit">form</button>

                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:40px;">
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

<footer class="footer clearfix">
    <div class="container">
        <!-- First footer -->
        <!-- <div class="first-footer">
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
        </div> -->
        <!-- Second footer -->
        <div class="second-footer">
            <div class="row">
                <!-- about & social icons -->
                <div class="col-md-3 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Higher conversion % on Zero Investment

                        </h3>
                        <div class="widget-text">
                            <p>✔
                                We generate leads from premium channels like Google
                                Adwords, referral, etc. Also, our system filters out 50% low
                                quality leads to ensure high conversion %.</p>

                        </div>
                    </div>
                </div>
                <!-- quick links -->
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Easy to Use Traveler Dashboard
                        </h3>
                       <p>Agents benefit from traveler dashboard (CRM) where they
                        manage numerous leads. Tracking leads was never so easy! </p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Easy to Use Traveler Dashboard
                        </h3>
                       <p>Agents benefit from traveler dashboard (CRM) where they
                        manage numerous leads. Tracking leads was never so easy! </p>
                    </div>
                </div>
                <!-- subscribe -->


            </div>
        </div>

    </div>
</footer>

<footer class="footer clearfix">
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
                            <li><a href="about.html">About</a></li>
                            <li><a href="tours.html">Tours</a></li>
                            <li><a href="destinations.html">Destinations</a></li>
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
</footer>
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
