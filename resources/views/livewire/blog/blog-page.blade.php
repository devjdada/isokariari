<div>
    <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="65"
        data-background="img/page-title.jpg" style="background-image: url(&quot;img/page-title.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="position-relative">
                            <h1 class="display-2 font-weight-800">Blogs</h1>
                        </div>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="#!">
                                    Blogs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="img/banner-shape1.png" alt="..." class="bottom-0 position-absolute start-0 z-index-99">
        </div>
    </section>

    <!-- BLOG TWO COLUMNS LEFT SIDE
    ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n2-9">
                <div class="order-2 col-lg-4 mt-2-9 order-lg-1">
                    <div class="pe-xl-1-9">
                        <div class="mb-5 blog-widget">
                            <h3 class="mb-4 h4 text-primary lh-base">Search Here</h3>
                            <div class="blog-search position-relative">
                                <form>
                                    <input type="text" placeholder="Search here">
                                    <button><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="mb-5 blog-widget">
                            <h3 class="mb-4 h4 text-primary lh-base">Recent Post</h3>
                            <div class="mb-4 d-flex">
                                <div class="flex-shrink-0">
                                    <a href="#!"><img src="img/blog-insta-01.jpg" alt="..."></a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2 display-28"><a href="#!" class="font-weight-600">People at the
                                            front of latest design revolution</a>
                                    </h4>
                                    <span><i class="ti-calendar"></i> Mar 24</span>
                                </div>
                            </div>
                            <div class="mb-4 d-flex">
                                <div class="flex-shrink-0">
                                    <a href="#!"><img src="img/blog-insta-02.jpg" alt="..."></a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2 display-28"><a href="#!" class="font-weight-600">Best Way to
                                            Get More From Natural Materials</a></h4>
                                    <span><i class="ti-calendar"></i> Mar 24</span>
                                </div>
                            </div>
                            <div class="mb-4 d-flex">
                                <div class="flex-shrink-0">
                                    <a href="#!"><img src="img/blog-insta-03.jpg" alt="..."></a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2 display-28"><a href="#!" class="font-weight-600">Building The
                                            Future Through Design</a></h4>
                                    <span><i class="ti-calendar"></i> Mar 24</span>
                                </div>
                            </div>
                            <div class="mb-0 d-flex">
                                <div class="flex-shrink-0">
                                    <a href="#!"><img src="img/blog-insta-04.jpg" alt="..."></a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2 display-28"><a href="#!" class="font-weight-600">Everything you
                                            need to know about building</a></h4>
                                    <span><i class="ti-calendar"></i> Mar 24</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 blog-widget">
                            <h3 class="mb-4 h4 text-primary lh-base">Popular Tag</h3>
                            <div class="popular-tags">
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Architecture </a>
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Engineering</a>
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Design</a>
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Construction</a>
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Planning</a>
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Project</a>
                                <a href="#!" class="px-3 py-1 mb-3 display-29 me-2">Residentaial</a>
                                <a href="#!" class="px-3 py-1 mb-0 display-29 me-2">Marketing</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="order-1 col-lg-8 mt-2-9 order-lg-2">
                    <div class="row mt-n1-9">
                        @foreach ($blogs as $index => $b)
                            <div class="col-xl-6 mt-1-9 wow fadeInUp" data-wow-delay="{{ ($index + 1) * 150 }}ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <article class="position-relative card-style2">
                                    <div class="blog-card">
                                        <div class="image-box">
                                            <img src="{{ $b->image }}" alt="..." class="h-100">
                                            <div class="blog-date"><span>07</span>Mar 24</div>
                                        </div>
                                        <div class="blog-content">
                                            <p class="mb-2 text-white">{{ $b->category }}</p>
                                            <h3 class="h4">
                                                <a href="{{ route('blog', ['slug' => $b->slug]) }}">
                                                    {{ $b->title }}
                                                </a>
                                            </h3>
                                            <div class="blog-link">
                                                <a href="{{ route('blog', ['slug' => $b->slug]) }}">
                                                    <span class="align-items-center">
                                                        Read More <i class="display-31 ti-arrow-right"></i>
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
            </div>
        </div>
    </section>


</div>
