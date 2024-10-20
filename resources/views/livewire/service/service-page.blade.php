<div>

    <!-- PAGE TITLE
        ================================================== -->
    <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="65"
        data-background="img/page-title.jpg" style="background-image: url(&quot;img/page-title.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="position-relative">
                            <h1 class="display-2 font-weight-800">Our Services</h1>
                        </div>
                        <ul>
                            <li><a href="/" wire:navigate>Home</a></li>
                            <li><a href="{{ route('services') }}" wire:navigate>Our Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="img/banner-shape1.png" alt="..." class="bottom-0 position-absolute start-0 z-index-99">
        </div>
    </section>

    <!-- SERVICE
        ================================================== -->
    <section>
        <div class="container">
            <div class="text-center section-heading1 mb-1-9 mb-md-2-5">
                <span class="mb-2 text-primary subheading">What We Do</span>
                <h2 class="mb-0 display-4 lh-1 font-weight-800">Our Best Services</h2>
            </div>
            <div class="mt-4 position-relative z-index-9 mt-sm-0">
                <div class="row mt-n1-9">
                    @foreach ($services as $index => $service)
                        <div class="col-md-6 col-xl-4 mt-1-9 wow fadeInUp" data-wow-delay="{{ 150 * ($index + 1) }}ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="card-style1 pt-service-box pt-service-box-style-1 ">
                                <div class="card-image">
                                    <img src="{{ $service->image }}" style="height: 480px" alt="...">
                                </div>
                                <div class="card-info">
                                    <div class="card-number"> {{ sprintf('%02d', $index + 1) }}</div>
                                    <h4 class="mb-2 text-white card-title">
                                        <a href="{{ route('service', ['slug' => $service->slug]) }}" wire:navigate
                                            class="text-white">{{ $service->title }}
                                        </a>
                                    </h4>
                                    <p class="card-subtitle">
                                        {{ \Illuminate\Support\Str::limit($service->description, 100, '...') }}
                                    </p>
                                    <a href="{{ route('service', ['slug' => $service->slug]) }}">
                                        <span class="text-white">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <div class="p-2 position-absolute bottom-5 left-5 bg-secondary z-index-9 ani-move ">
        </div>
    </section>



    @livewire('component.action')

</div>
