@extends('layout.layout', ['title' => 'Home'])

@section('content')
    <!-- content -->
    <div class="mil-content">
        <div id="swupMain" class="mil-main-transition">

            <!-- banner -->
            <section class="mil-banner mil-dark-bg">
                <div class="mi-invert-fix">
                    <div class="mil-animation-frame">
                        <div class="mil-animation mil-position-1 mil-scale" data-value-1="7" data-value-2="1.6"></div>
                        <div class="mil-animation mil-position-2 mil-scale" data-value-1="4" data-value-2="1"></div>
                        <div class="mil-animation mil-position-3 mil-scale" data-value-1="1.2" data-value-2=".1"></div>
                    </div>

                    <div class="mil-gradient"></div>

                    <div class="container">
                        <div class="mil-banner-content mil-up">

                            <h1 class="mil-muted mil-mb-60">Designing <span class="mil-thin">a Better</span><br> World <span
                                    class="mil-thin">Today</span></h1>
                            <div class="row">
                                <div class="col-md-7 col-lg-5">

                                    <p class="mil-light-soft mil-mb-60">Welcome to Melvin's world of endless imagination and
                                        boundless creativity! Together, let's embark on a remarkable journey where dreams
                                        become tangible realities. Welcome to Melvin's portfolio, where innovation and
                                        imagination converge to create unforgettable works. Explore and discover wonders in
                                        every corner of this page.</p>

                                </div>
                            </div>

                            <a href="/services" class="mil-button mil-arrow-place mil-btn-space">
                                <span>What we do</span>
                            </a>

                            <a href="/portfolio" class="mil-link mil-muted mil-arrow-place">
                                <span>View works</span>
                            </a>

                            <div class="mil-circle-text">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300"
                                    enable-background="new 0 0 300 300" xml:space="preserve" class="mil-ct-svg mil-rotate"
                                    data-value="360">
                                    <defs>
                                        <path id="circlePath"
                                            d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text style="letter-spacing: 6.5px">
                                            <!-- circle text -->
                                            <textPath xlink:href="#circlePath">Scroll down - Scroll down - </textPath>
                                        </text>
                                    </g>
                                </svg>
                                <a href="#about" class="mil-button mil-arrow-place mil-icon-button mil-arrow-down"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- about -->
            <section id="about">
                <div class="container mil-p-120-30">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-xl-5">

                            <div class="mil-mb-90">
                                <h2 class="mil-up mil-mb-60">About <span class="mil-thin">Me</span></h2>
                                <p class="mil-up mil-mb-30">Hey there, I'm Melvin – a creative soul passionate about graphic
                                    design and photography! I love turning ideas into stunning visuals and capturing moments
                                    that tell stories through colors, shapes, and words. Whether it's crafting logos or
                                    snapping portraits, I'm all about making things look awesome.</p>

                                <p class="mil-up mil-mb-60">When I'm not creating or clicking away, I'm diving into new
                                    interests, constantly learning and exploring. These adventures keep my creativity
                                    flowing and add excitement to my journey. Thanks for stopping by my portfolio! Feel free
                                    to browse around and join me on this creative ride.</p>

                                <div class="mil-about-quote">
                                    <div class="mil-avatar mil-up">
                                        <img src="../assets/img/photo/pp baru.jpg" alt="Founder">
                                    </div>
                                    <h6 class="mil-quote mil-up">Beltshazar Melvin Permadhi</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5">

                            <div class="mil-about-photo mil-mb-90">
                                <div class="mil-lines-place"></div>
                                <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="../assets/img/photo/Alternate 2.JPG" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- about end -->

            <!-- services -->
            <section class="mil-dark-bg">
                <div class="mi-invert-fix">
                    <div class="mil-animation-frame">
                        <div class="mil-animation mil-position-1 mil-scale" data-value-1="2.4" data-value-2="1.4"
                            style="top: 300px; right: -100px"></div>
                        <div class="mil-animation mil-position-2 mil-scale" data-value-1="2" data-value-2="1"
                            style="left: 150px"></div>
                    </div>
                    <div class="container mil-p-120-0">

                        <div class="mil-mb-120">
                            <div class="row">
                                <div class="col-lg-10">

                                    <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up">Professionals
                                        focused on helping your brand<br> grow and move forward.</span>

                                </div>
                            </div>

                            <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                                <span class="mil-text-image pointer-event"><img src="../assets/img/photo/bar.png" alt="team"></span>
                                <h2 class="mil-h1 mil-muted mil-center">Unique <span class="mil-thin">Ideas</span></h2>

                            </div>
                            <div class="mil-complex-text justify-content-center mil-up">

                                <h2 class="mil-h1 mil-muted mil-center">For Your <span class="mil-thin">Business.</span>
                                </h2>
                                <a href="/services" class="mil-services-button mil-button mil-arrow-place"><span>What we
                                        do</span></a>

                            </div>
                        </div>

                        <div class="row mil-services-grid m-0">
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="service.html" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Photography<br>and Videography</h5>
                                    <p class="mil-light-soft mil-mb-30">Our creative agency is a team of professionals
                                        focused on helping your brand grow.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="service.html" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Website Design <br>and Development</h5>
                                    <p class="mil-light-soft mil-mb-30">Our creative agency is a team of professionals
                                        focused on helping your brand grow.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="service.html" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Advertising and <br>Marketing Campaigns</h5>
                                    <p class="mil-light-soft mil-mb-30">Our creative agency is a team of professionals
                                        focused on helping your brand grow.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                            <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                                <a href="service.html" class="mil-service-card-sm mil-up">
                                    <h5 class="mil-muted mil-mb-30">Creative Consulting <br>and Development</h5>
                                    <p class="mil-light-soft mil-mb-30">Our creative agency is a team of professionals
                                        focused on helping your brand grow.</p>
                                    <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services end -->


            <!-- reviews -->
            <section class="mil-soft-bg">
                <div class="container mil-p-120-120">

                    <div class="row">
                        <div class="col-lg-10">

                            <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Customer reviews are a
                                valuable source <br>of information for both businesses and consumers.</span>

                        </div>
                    </div>

                    <h2 class="mil-center mil-up mil-mb-60">Customer <span class="mil-thin">Voices:</span> <br>Hear What
                        <span class="mil-thin">They Say!</span>
                    </h2>

                    <div class="mil-revi-pagination mil-up mil-mb-60"></div>

                    <div class="row mil-relative justify-content-center">
                        <div class="col-lg-8">

                            <div class="mil-slider-nav mil-soft mil-reviews-nav mil-up">
                                <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place"></div>
                                <div class="mil-slider-arrow mil-revi-next mil-arrow-place"></div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="mil-quote-icon mil-up">
                                <path
                                    d="M 13.5 10 A 8.5 8.5 0 0 0 13.5 27 A 8.5 8.5 0 0 0 18.291016 25.519531 C 17.422273 29.222843 15.877848 31.803343 14.357422 33.589844 C 12.068414 36.279429 9.9433594 37.107422 9.9433594 37.107422 A 1.50015 1.50015 0 1 0 11.056641 39.892578 C 11.056641 39.892578 13.931586 38.720571 16.642578 35.535156 C 19.35357 32.349741 22 27.072581 22 19 A 1.50015 1.50015 0 0 0 21.984375 18.78125 A 8.5 8.5 0 0 0 13.5 10 z M 34.5 10 A 8.5 8.5 0 0 0 34.5 27 A 8.5 8.5 0 0 0 39.291016 25.519531 C 38.422273 29.222843 36.877848 31.803343 35.357422 33.589844 C 33.068414 36.279429 30.943359 37.107422 30.943359 37.107422 A 1.50015 1.50015 0 1 0 32.056641 39.892578 C 32.056641 39.892578 34.931586 38.720571 37.642578 35.535156 C 40.35357 32.349741 43 27.072581 43 19 A 1.50015 1.50015 0 0 0 42.984375 18.78125 A 8.5 8.5 0 0 0 34.5 10 z"
                                    fill="#000000" />
                            </svg>

                            <div class="swiper-container mil-reviews-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">This creative agency stands out with their
                                                exceptional talent and expertise. Their ability to think outside the box and
                                                bring unique ideas to life is truly impressive. With meticulous attention to
                                                detail, they consistently deliver visually stunning and impactful work.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                                agency, and I must say, they truly impressed me. They consistently think
                                                outside the box, resulting in impressive and impactful work. I highly
                                                recommend this agency for their consistent delivery of exceptional creative
                                                solutions.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">This creative agency stands out with their
                                                exceptional talent and expertise. Their ability to think outside the box and
                                                bring unique ideas to life is truly impressive. With meticulous attention to
                                                detail, they consistently deliver visually stunning and impactful work.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                                agency, and I must say, they truly impressed me. They consistently think
                                                outside the box, resulting in impressive and impactful work. I highly
                                                recommend this agency for their consistent delivery of exceptional creative
                                                solutions.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">This creative agency stands out with their
                                                exceptional talent and expertise. Their ability to think outside the box and
                                                bring unique ideas to life is truly impressive. With meticulous attention to
                                                detail, they consistently deliver visually stunning and impactful work.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                                agency, and I must say, they truly impressed me. They consistently think
                                                outside the box, resulting in impressive and impactful work. I highly
                                                recommend this agency for their consistent delivery of exceptional creative
                                                solutions.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                            data-swiper-parallax-opacity="0">
                                            <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                            <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                            <p class="mil-text-xl mil-up">This creative agency stands out with their
                                                exceptional talent and expertise. Their ability to think outside the box and
                                                bring unique ideas to life is truly impressive. With meticulous attention to
                                                detail, they consistently deliver visually stunning and impactful work.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!-- reviews end -->

            <!-- partners -->
            <div class="mil-soft-bg">
                <div class="container mil-p-0-120">

                    <div class="swiper-container mil-infinite-show mil-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#." class="mil-partner-frame" style="width: 60px;"><img
                                        src="img/partners/1.svg" alt="logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#." class="mil-partner-frame" style="width: 100px;"><img
                                        src="img/partners/2.svg" alt="logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#." class="mil-partner-frame" style="width: 60px;"><img
                                        src="img/partners/1.svg" alt="logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#." class="mil-partner-frame" style="width: 100px;"><img
                                        src="img/partners/2.svg" alt="logo"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- partners end -->
        @endsection

        @section('nav')
            <nav class="mil-main-menu" id="swupMenu">
                <ul>
                    <li class="mil-has-children mil-active">
                        <a href="/">Homepage</a>
                    </li>
                    <li class="mil-has-children">
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    <li class="mil-has-children">
                        <a href="/service">Services</a>
                    </li>
                    <li class="mil-has-children">
                        <a href="#.">Newsletter</a>
                        <ul>
                            <li><a href="blog.html">Blog List</a></li>
                            <li><a href="publication.html">Publication</a></li>
                        </ul>
                    </li>
                    <li class="mil-has-children">
                        <a href="#.">Other pages</a>
                        <ul>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        @endsection
