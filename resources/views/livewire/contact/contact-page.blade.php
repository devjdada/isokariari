<div>

    <!-- PAGE TITLE
        ================================================== -->
    <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="65"
        data-background="img/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="position-relative">
                            <h1 class="display-2 font-weight-800">Contact Us</h1>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#!">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="img/banner-shape1.png" alt="..." class="bottom-0 position-absolute start-0 z-index-99">
        </div>
    </section>

    <!-- CONTACT INFO
        ================================================== -->
    <section class="pb-4">
        <div class="container">
            <div class="row align-items-center mt-n2-9">
                <div class="col-lg-4 mt-2-9">
                    <div class="pe-lg-1-6 pe-xl-2-9">
                        <div class="section-heading1 mb-2-9">
                            <h2 class="mb-0 display-6 lh-1 font-weight-800">Get In Touch</h2>
                        </div>
                        <div class="row mt-n1-6">
                            <div class="col-sm-6 col-lg-12 mt-1-6">
                                <div class="d-flex mb-2-2">
                                    <div class="flex-shrink-0">
                                        <a href="#!"><img src="img/icon-11.png" alt="..."></a>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h2 class="mb-3 h4">Address</h2>
                                        <p class="mb-0 display-28">
                                            {{ $about->address }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12 mt-1-6">
                                <div class="d-flex mb-2-2">
                                    <div class="flex-shrink-0">
                                        <a href="#!"><img src="img/icon-12.png" alt="..."></a>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h2 class="mb-3 h4">Phone</h2>
                                        <p class="mb-0 font-weight-500 display-28">
                                            <a href="tel:{{ $about->phone }}">
                                                {{ $about->phone }}
                                            </a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12 mt-1-6">
                                <div class="mb-0 d-flex">
                                    <div class="flex-shrink-0">
                                        <a href="#!"><img src="img/icon-13.png" alt="..."></a>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h2 class="mb-3 h4">Email</h2>
                                        <p class="mb-0 font-weight-500 display-28"><a
                                                href="mailto:info@madina.com">info@example.com</a></p>
                                        <p class="mb-0 font-weight-500 display-28"><a
                                                href="mailto:info@madina.com">info@youremail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 col-lg-8 mt-2-9 contact-form">
                    <form class="contact quform" action="quform/contact.php" method="post"
                        enctype="multipart/form-data" onclick="">
                        <div class="quform-elements">
                            <div class="row">
                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="name">Your Name <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Your name here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="email">Your Email <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email"
                                                placeholder="Your email here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="subject">Your Subject <span
                                                class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                placeholder="Your subject here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="phone">Contact Number</label>
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone"
                                                placeholder="Your phone here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <label for="message">Message <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Captcha element -->
                                <div class="col-md-12">
                                    <div class="quform-element">
                                        <div class="form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="type_the_word" type="text"
                                                    name="type_the_word" placeholder="Type the below word" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="quform-captcha">
                                                <div class="quform-captcha-inner">
                                                    <img src="quform/images/captcha/courier-new-light.png"
                                                        alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Captcha element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="button" type="submit"><span>Send Message</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP
        ================================================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <iframe width="100%" height="600" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
