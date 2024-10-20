    <!-- PORTFOLIO
================================================== -->
    <section class="bg-img cover-background wow fadeIn" data-wow-delay="200ms" data-background="img/bg-02.jpg">
        <div class="container-fluid">
            <div class="text-center section-heading1 mb-1-9 mb-md-2-5">
                <span class="mb-2 text-primary subheading">featured projects</span>
                <h2 class="mb-0 display-4 lh-1 font-weight-800">Our Creative Project</h2>
            </div>
            <div class="portfolio01-carousel owl-carousel owl-theme">
                @foreach ($projects as $project)
                    <div class="portfolio01-wapper">
                        <div class="overflow-hidden portfolio-block position-relative">
                            <div class="portfolio-overlay">
                                <div class="item-img">
                                    <img src="{{ $project->image }}" alt="...">
                                </div>
                                <div class="px-4 text-center position-absolute bottom-5 w-100 z-index-9 text-md-start">
                                    <h4 class="mb-0">
                                        <a href="#" wire:navigate class="text-white portfolio-link">
                                            {{ $project->title }}
                                        </a>
                                    </h4>
                                    <span class="mb-0 text-primary">{{ $project->category }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div>
            <img src="img/banner-shape1.png" class="top-0 position-absolute z-index-99 transform-rotate" alt="...">
        </div>
    </section>
