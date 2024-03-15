@extends('layout.layout')
@section('title', 'Portfolio')
@section('content')
<div class="mil-content">
    <div id="swupMain" class="mil-main-transition">

        <!-- banner -->
        <div class="mil-inner-banner">
            <div class="mil-banner-content mil-up">
                <div class="mil-animation-frame">
                    <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
                </div>
                <div class="container">
                    <ul class="mil-breadcrumbs mil-mb-60">
                        <li><a href="/">Homepage</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                    </ul>
                    <h1 class="mil-mb-70">Portfolio</h1><h1 class="mil-thin">Showcase</h1>
                    <a href="#portfolio" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                        <span>Our works</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- portfolio -->
        <section id="portfolio">
            <div class="container mil-portfolio mil-p-120-60">

                <div class="mil-lines-place"></div>
                <div class="mil-lines-place mil-lines-long"></div>

                <div class="row justify-content-between align-items-center">
                    @foreach ($portfolio as $key => $data)
                        @if ($key % 2 == 0)
                            <div class="col-lg-5">
                        @else
                            <div class="col-lg-6">
                        @endif
                            <a href="/portfolio/{{$data->id}}" class="mil-portfolio-item mil-more mil-mb-60">
                                <div class="mil-cover-frame mil-vert mil-up">
                                    <div class="mil-cover">
                                        <img src="../assets/img/works/{{$key + 1}}/COVER.JPG" alt="cover"> <!-- Use $key + 1 to get the correct image path -->
                                    </div>
                                </div>
                                <div class="mil-descr">
                                    <div class="mil-labels mil-up mil-mb-15">
                                        <div class="mil-label mil-upper mil-accent">{{$data->category}}</div> <!-- Use $data->kategori_project for category -->
                                        <div class="mil-label mil-upper">{{$data->tanggal}}</div> <!-- Use $data->tanggal for date -->
                                    </div>
                                    <h4 class="mil-up">{{$data->nama_project}}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach


                    {{-- <div class="col-lg-6">
                        <a href="project-2.html" class="mil-portfolio-item mil-more mil-parallax mil-mb-60" data-value-1="60" data-value-2="-60">
                            <div class="mil-cover-frame mil-hori mil-up">
                                <div class="mil-cover">
                                    <img src="img/works/2.jpg" alt="cover">
                                </div>
                            </div>
                            <div class="mil-descr">
                                <div class="mil-labels mil-up mil-mb-15">
                                    <div class="mil-label mil-upper mil-accent">{{$data->category}}</div>
                                    <div class="mil-label mil-upper">may 24 2023</div>
                                </div>
                                <h4 class="mil-up">{{$data->nama_project}}</h4>
                            </div>
                        </a>

                    </div>

                    @endforeach --}}

                </div>
            </div>
        </section>
        <!-- portfolio end -->

        <!-- call to action -->
        <section class="mil-soft-bg">
            <div class="container mil-p-120-120">
                <div class="row">
                    <div class="col-lg-10">

                        <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Looking to make your mark? We'll help you turn <br> your project into a success story.</span>

                    </div>
                </div>
                <div class="mil-center">
                    <h2 class="mil-up mil-mb-60">Ready to bring your <span class="mil-thin">ideas to</span> life? <br> We're <span class="mil-thin">here to help</span></h2>
                    <div class="mil-up"><a href="contact.html" class="mil-button mil-arrow-place"><span>Contact us</span></a></div>
                </div>
            </div>
        </section>
        <!-- call to action end -->
@endsection

@section('nav')
<nav class="mil-main-menu" id="swupMenu">
    <ul>

        <li class="mil-has-children">
            <a href="/">Homepage</a>
        </li>
        <li class="mil-has-children mil-active">
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
