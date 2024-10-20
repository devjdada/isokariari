<div>
    <!-- PAGE TITLE
        ================================================== -->
    <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="65"
        data-background="{{ $about->image }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="position-relative">
                            <h1 class="display-2 font-weight-800">About Us</h1>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#!">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="img/banner-shape1.png" alt="..." class="bottom-0 position-absolute start-0 z-index-99">
        </div>
    </section>

    <!-- ABOUTUS
        ================================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center mt-n5">
                <div class="order-2 mt-5 col-lg-6 order-lg-1">
                    {!! $about->description !!}
                </div>
                <div class="order-1 mt-5 col-lg-6 wow fadeIn order-lg-2" data-wow-delay="400ms">
                    <div class="about-block position-relative ps-lg-3 ps-xl-5">
                        <div class="image position-relative d-inline-block">
                            <img src="{{ $about->logo }}" alt="...">
                            <div class="about-founded">
                                <div class="text-center">
                                    <img src="img/icon-06.png" alt="" class="mb-2">
                                    <p class="mb-0 text-white">Founded in 1987</p>
                                </div>
                            </div>
                            <div class="img-border">
                            </div>
                            <div class="small-img d-none d-sm-block">
                                <img src="{{ $about->logo2 }}" alt="..">
                            </div>
                            {{-- <div class="bottom-0 left-0 position-absolute story-video">
                                <a class="video video_btn01" href="https://www.youtube.com/watch?v=Dhxf5mm7g1g"><i
                                        class="text-white fa fa-play"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER
        ================================================== -->
    {{-- <section class="pt-0 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row mt-n1-9">
                <div class="col-sm-6 col-md-3 mt-1-9">
                    <div class="text-center counter-block position-relative">
                        <h4 class="counter-font"><span class="countup">250</span>+</h4>
                        <h5 class="h6 text-uppercase font-weight-500 text-primary">Projects</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mt-1-9">
                    <div class="text-center counter-block position-relative">
                        <h4 class="counter-font"><span class="countup">25</span>+</h4>
                        <h5 class="h6 text-uppercase font-weight-500 text-primary">Years Experience</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mt-1-9">
                    <div class="text-center counter-block position-relative">
                        <h4 class="counter-font"><span class="countup">324</span>+</h4>
                        <h5 class="h6 text-uppercase font-weight-500 text-primary">Renovations</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mt-1-9">
                    <div class="text-center counter-block last position-relative">
                        <h4 class="counter-font"><span class="countup">2387</span>+</h4>
                        <h5 class="h6 text-uppercase font-weight-500 text-primary">Employees</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- SERVICE
        ================================================== -->
    @livewire('home.comp.service')

    <!-- SKILL
        ================================================== -->
    @livewire('home.comp.achiement')

    <!-- CLIENTS
        ================================================== -->

    @livewire('about.comp.clients-comp')
    <!-- EXTRA
        ================================================== -->
    <section class="bg-dark extra-01">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 wow fadeInUp" data-wow-delay="200ms">
                    <div class="row g-xl-5 mt-n5">
                        <div class="mt-5 col-md-6">
                            <div>
                                <div class="bg-img cover-background" data-background="img/our-mission-01.jpg">
                                    <div class="background-overlay"></div>
                                    <div class="p-4 p-lg-7 position-relative z-index-9">
                                        <img src="{{ $about->logo2 }}" alt="..." class="mb-3">
                                        <h4 class="mb-2 text-white">Our Mission</h4>
                                        <p class="mb-0 text-white">
                                            {{ $about->mission }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 col-md-6">
                            <div>
                                <div class="bg-img cover-background" data-background="img/our-mission-02.jpg">
                                    <div class="background-overlay"></div>
                                    <div class="p-4 p-lg-7 position-relative z-index-9">
                                        <img src="{{ $about->logo }}" alt="..." class="mb-3">
                                        <h4 class="mb-2 text-white">Our Vision</h4>
                                        <p class="mb-0 text-white">
                                            {{ $about->vision }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM
        ================================================== -->
    @livewire('home.comp.team')

    @livewire('component.action');

</div>
