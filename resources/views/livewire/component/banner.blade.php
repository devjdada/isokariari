<div class="top-position1 banner-style01 position-relative">
    <div class="slider-fade owl-carousel owl-theme w-100">
        @foreach ($sliders as $slider)
            <div class="item bg-img cover-background full-screen secondary-overlay" data-overlay-dark="7"
                data-background="{{ $slider->image }}">
                <div class="container position-relative z-index-9">
                    <div class="text-center row align-items-center min-vh-100 justify-content-center">
                        <div class="col-lg-8">
                            <div class="mt-5 mt-sm-0">
                                <p class="mb-2 text-primary text-uppercase letter-spacing-4 d-block font-weight-700">
                                    {{ $slider->smallCaption }}
                                </p>
                                <h1 class="text-white mb-1-9 main-title text-uppercase">
                                    {{ $slider->bigCaption }}
                                </h1>
                                <a href="contact-us.html" class="button"><span>Get Started</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <div class="position-absolute z-index-99 banner-shape1"><img src="img/banner-shape1.png" alt="...">
    </div>
    <div class="p-2 d-none d-sm-block position-absolute top-10 left-5 bg-primary z-index-9 ani-move "></div>

</div>
