<div>

    <!-- PAGE TITLE
        ================================================== -->
    <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="65"
        data-background="{{ asset($service->image) }}"
        style="background-image: url(&quot;{{ asset($service->image) }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="position-relative">
                            <h1 class="display-2 font-weight-800">Service Details</h1>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#!">Service Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="./service_files/banner-shape1.png" alt="..."
                class="bottom-0 position-absolute start-0 z-index-99">
        </div>
    </section>

    <!-- SERVICE DETAILS
        ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n2-9">
                <div class="order-2 col-lg-4 order-lg-1 mt-2-9">
                    <div class="pe-lg-1-9">
                        <div class="services-sidebar">
                            <div class="mb-5 services-widget">
                                <h4 class="service-left-title">Our Services</h4>
                                <div class="services-cat-list">
                                    <ul class="list-wrap list-unstyled">
                                        @foreach ($services as $s)
                                            <li class="mb-3 @if ($s->slug == $service->slug) active @endif">
                                                <a href="{{ route('service', ['slug' => $s->slug]) }}"
                                                    class="p-3 display-28 font-weight-600">
                                                    {{ $s->title }}
                                                    <i class="ti-arrow-right display-25"></i>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="mb-5 services-widget">
                                <h4 class="service-left-title">Brochure</h4>
                                <div class="services-brochure-wrap">
                                    <p>when an unknown printer took ga lley offer typey anddey.</p>
                                    <a href="https://builder.websitelayout.net/service-details.html#!"
                                        class="mb-3 download-btn font-weight-600"><i class="far fa-file-pdf"></i>PDF.
                                        Download</a>
                                    <a href="https://builder.websitelayout.net/service-details.html#!"
                                        class="mb-0 download-btn font-weight-600"><i class="far fa-file-alt"></i>DOC.
                                        Download</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="order-1 col-lg-8 order-lg-2 mt-2-9">
                    <div>
                        <div class="position-relative mb-2-2">
                            <img src="{{ $service->image }}" style="width: 100%" alt="...">
                        </div>
                        <div class="mb-0 editor-img">
                            <h3 class="mb-3 h2">{{ $service->title }}</h3>
                            {!! $service->description !!}
                        </div>
                        <div style="height: 50px; width:100%; display: relative "></div>
                        <div class="img-gallery">
                            @foreach ($galleries as $g)
                                <div class="img-item">
                                    <a href="{{ $g->url }}" data-lightbox="roadtrip">
                                        <img src="{{ $g->thumbnail }}" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        {{-- <div class="row mt-n2-5 mb-2-2">
                            <div class="col-xl-5 mt-2-5">
                                <div class="position-relative">
                                    <img src="./service_files/service-details-02.jpg" alt="...">
                                </div>
                            </div>
                            <div class="col-xl-7 mt-2-5">
                                <h3 class="mb-4">Benefits of Our Services</h3>
                                <p class="mb-4">Construction Design lonon lorem ac erat suscipit bibendum. Null and
                                    void. Sedeuter nunc volutpat, mollis sapien vel, and conseyer turpeutionyer masin
                                    libero sempe are the examples.</p>
                                <p class="mb-0">Gravida eros ut turpis interdum ornare. Interdum et malesu they
                                    adamale popularities ac anteipsu pimsine faucibus.</p>
                            </div>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
