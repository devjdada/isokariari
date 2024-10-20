<header class="header-style1 menu_area-light">

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        <div class="top-search bg-primary">
            <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="cursor-pointer input-group-addon">
                            <button class="text-white search-form_submit fas fa-search" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                            placeholder="Type & hit enter...">
                        <span class="mt-1 input-group-addon close-search"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="p-0 navbar navbar-expand-lg navbar-light">
                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="index.html" class="navbar-brand">
                                    <img id="logo" src="{{ asset('img/logo-inner.png') }}" alt="logo">
                                </a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- start menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li><a href="{{ route('home') }}">Home</a></li>

                                <li><a href="#!">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About</a></li>
                                        <li>
                                            <a href="#!">Our Team</a>
                                            <ul>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-detail.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="certification.html">Certification</a></li>
                                        <li><a href="history.html">Our History</a></li>
                                        <li><a href="our-process.html">Our Process</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="coming-soon.html">Comingsoon</a></li>
                                        <li><a href="404-page.html">404 Page</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="{{ route('services') }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('projects') }}">Projects</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav align-items-lg-center ms-lg-auto main-font">
                                <ul>
                                    <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                    <li class="d-none d-xl-inline-block"><a href="contact-us.html"
                                            class="text-white button md white">Download Profile</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
