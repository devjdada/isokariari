<!-- BLOG
================================================== -->
<section class="bg-img cover-background" data-background="img/bg-01.png">
    <div class="container">
        <div class="section-heading1 mb-1-9 mb-md-2-5">
            <div class="d-inline-block">
                <span class="mb-2 text-primary subheading">Latest Blog</span>
            </div>
            <h2 class="mb-0 display-4 lh-1 font-weight-800">Our Latest Articles</h2>
        </div>
        <div class="row g-xl-5 mt-n1-9">
            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                <div class="shadow p-1-6 p-sm-1-9 p-md-2-2 p-xl-2-5 bg-very-light-gray">
                    <form class="contact quform" action="quform/contact.php" method="post"
                        enctype="multipart/form-data" onclick="">
                        <div class="quform-elements">
                            <div class="row">
                                <!-- Begin Text input element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Your name here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email"
                                                placeholder="Your email here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                placeholder="Your subject here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
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
                                                    <img src="img/courier-new-light.png" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Captcha element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="button" type="submit"><span>Send
                                                Message</span></button>
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


            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="600ms">
                    <article class="position-relative card-style2 h-100">
                        <div class="blog-card h-100">
                            <div class="image-box h-100">
                                <img src="{{ $blog->image }}" alt="..." class="h-100">
                                <div class="blog-date">
                                    <span>{{ date('D', strtotime($blog->create_at)) }}</span>{{ date('M', strtotime($blog->create_at)) }}
                                    {{ date('y', strtotime($blog->create_at)) }}
                                </div>
                            </div>
                            <div class="blog-content">
                                <p class="mb-2 text-white">
                                    {{ $blog->category }}
                                </p>
                                <h3 class="h4">
                                    <a href="{{ route('blog/' . $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <div class="blog-link">
                                    <a href="{{ route('blog/' . $blog->slug) }}">
                                        <span class="align-items-center">Read More
                                            <i class="display-31 ti-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
