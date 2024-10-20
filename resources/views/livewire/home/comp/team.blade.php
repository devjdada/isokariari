        <!-- TEAM
================================================== -->
        <section class="team-style01">
            <div class="position-absolute top-50 end-0 translate-middle-y d-none d-sm-block">
                <span class="d-inline-block heading-text">Professional</span>
            </div>
            <div class="container">
                <div class="mb-1-9 mb-md-2-5 d-sm-flex align-items-center justify-content-between">
                    <div class="section-heading1">
                        <span class="mb-2 text-primary subheading">Our Team</span>
                        <h2 class="mb-0 display-4 lh-1 font-weight-800">Our Creative Minds</h2>
                    </div>
                    <div class="mt-4 mt-sm-0">
                        <a href="team.html" class="button dark">View All</a>
                    </div>
                </div>
                <div class="row g-xl-5 mt-n1-9">
                    @foreach ($users as $user)
                        <div class="col-sm-6 col-md-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                            <div class="team-block position-relative">
                                <div class="mb-4 overflow-hidden team-img position-relative">
                                    <img src="{{ $user->image }}" alt="...">
                                    <div class="box-overlay"></div>
                                    <ul class="mb-0 social-icons ps-0">
                                        @if ($user->facebook)
                                            <li><a href="{{ $user->facebook }}"><i class="ti-facebook"></i></a></li>
                                        @endif
                                        @if ($user->twitter)
                                            <li><a href="{{ $user->twitter }}"><i class="ti-twitter-alt"></i></a></li>
                                        @endif
                                        @if ($user->linkedin)
                                            <li><a href="{{ $user->linkedin }}"><i class="ti-instagram"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="text-center">
                                    <h4 class="h3"><a href="team-detail.html" class="text-black">
                                            {{ $user->name }}</a>
                                    </h4>
                                    <p class="mb-0 text-primary">
                                        {{ $user->title }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="left-0 d-none d-sm-block position-absolute top-n5 ani-left-right">
                <img src="img/shape-02.png" alt="...">
            </div>
            <div class="p-2 position-absolute bottom-5 right-5 bg-primary z-index-9 ani-move ">
            </div>
        </section>
