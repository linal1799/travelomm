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
                                <form action="{{route('store')}}" method="POST">
                                    @csrf
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
