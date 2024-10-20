<div>
    <section class="page-title-section top-position1 bg-img cover-background secondary-overlay" data-overlay-dark="65"
        data-background="img/page-title.jpg" style="background-image: url('img/page-title.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="position-relative">
                            <h1 class="display-2 font-weight-800">
                                Portfolio Standard
                            </h1>
                        </div>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="#!">Portfolio </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="img/banner-shape1.png" alt="..." class="bottom-0 position-absolute start-0 z-index-99" />
        </div>
    </section>

    <!-- PORTFOLIO 3 COLUMNS
================================================== -->
    <section>
        <div class="container">
            <div class="text-center section-heading1 mb-1-9 mb-md-2-5">
                <span class="mb-2 text-primary subheading">featured projects</span>
                <h2 class="mb-0 display-4 lh-1 font-weight-800">
                    Our Creative Project
                </h2>
            </div>
            <div class="row portfolio-gallery mt-n2-6">
                @foreach ($projects as $index => $project)
                    <div class="col-md-6 col-lg-4 mt-2-6 wow fadeInUp" data-src="{{ $project->image }}"
                        data-wow-delay="{{ 150 * ($index + 1) }}ms"
                        style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"
                        data-sub-html="&lt;h4 class=&#39;text-white&#39;&gt;&lt;a href=&#39;{{ route('project', ['slug' => $project->slug]) }}&#39; class=&#39;text-white&#39;&gt;#06&lt;/a&gt;&lt;/h4&gt;">
                        <div class="overflow-hidden portfolio-block position-relative">
                            <div class="portfolio-overlay">
                                <div class="item-img">
                                    <img src="{{ $project->image }}" style="height: 530px" alt="..." />
                                </div>
                                <div class="px-4 text-center position-absolute bottom-5 w-100 z-index-9 text-md-start">
                                    <h4 class="mb-0">
                                        <a href="{{ route('project', ['slug' => $project->slug]) }}"
                                            class="text-white portfolio-link">{{ $project->title }}</a>
                                    </h4>
                                    <span class="mb-0 text-primary">{{ $project->category }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    @livewire('component.action')
</div>
