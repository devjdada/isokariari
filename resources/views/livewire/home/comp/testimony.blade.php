<!-- TESTIMONIAL
================================================== -->
<section class="pb-0 overflow-visible bg-secondary">
    <div class="container">
        <div class="row mt-n5">
            <div class="mt-5 col-lg-6">
                <div class="section-heading1 mb-1-9 mb-md-2-5">
                    <span class="mb-2 text-primary subheading">Providing Value</span>
                    <h2 class="mb-0 text-white display-4 lh-1 font-weight-800">Visions and Creating
                        Reality.
                    </h2>
                </div>
                <div class="d-sm-flex align-items-center">
                    <span class="countup text-big font-weight-800 text-uppercase image-mask cover-background bg-img"
                        data-background="img/bg-01.jpg">20</span>
                    <div class="ms-sm-4">
                        <h3 class="mb-0 text-white">Years Of</h3>
                        <p class="mb-0 font-weight-700 text-primary display-14">Experiance</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center col-lg-6 position-relative">
                <div class="shadow-sm bg-light testimonial-style01 text-start bg-img cover-background"
                    data-background="img/bg-03.png">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        @foreach ($testimonies as $testimony)
                            <div class="testimonial-wapper">
                                <i class="mb-3 ti-quote-left fs-1 text-primary d-block"></i>
                                <p class="mb-1-9">
                                    {{ $testimony->doc }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{ $testimony->avatar }}" style="height: 70px"
                                                class="rounded-circle" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1 text-primary">
                                                {{ $testimony->name }}
                                            </h5>
                                            <span class="opacity8">
                                                {{ $testimony->title }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img src="img/banner-shape1.png" class="top-0 position-absolute z-index-99 transform-rotate" alt="...">
    </div>
</section>
