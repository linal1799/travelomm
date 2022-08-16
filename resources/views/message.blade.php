<div class="col-md-5 mb-30 offset-md-1">
    <div class="sidebar">
        <div class="right-sidebar">
            <div class="right-sidebar item">
                <h2>Get in touch</h2>
                <form method="post" class="right-sidebar item-form contact__form" action="{{route('store')}}">
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
