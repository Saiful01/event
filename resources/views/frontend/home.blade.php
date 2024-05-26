@extends('layouts.frontend')
@section('content')

    <style>


        .list-ic a {
            color: #788288;
            text-decoration: none;
        }

        .list-ic li {
            position: relative;
        }

        .list-ic li span {
            display: inline-block;
            font-weight: 800;
            width: 2em;
            height: 2em;
            text-align: center;
            line-height: 2em;
            border-radius: 1em;
            background: #FA0368;
            color: white;
            position: relative;
        }

        .list-ic li::before {
            content: '';
            position: absolute;
            background: #FA0368;
            z-index: -1;
        }

        .list-ic.horizontal li {
            display: inline-block;
        }

        .list-ic.horizontal li span {
            margin: 0 1em;
        }

        .list-ic.horizontal li::before {
            top: 0.9em;
            left: -25px;
            width: 4em;
            height: 0.2em;
        }

        .list-ic.vertical {
            padding: 0;
            margin: 0;
        }

        .list-ic.vertical li {
            list-style-type: none;
            text-align: left;
        }

        .list-ic.vertical li span {
            margin: 1.4em 0;
        }

        .list-ic.vertical li::before {
            top: -35px;
            left: 13px;
            width: 0.2em;
            height: 4em;
        }

        .list-ic li:first-child::before {
            display: none;
        }

        .list-ic .active {
            background: dodgerblue;
        }

        .list-ic .active ~ li {
            background: lightblue;
        }

        .list-ic .active ~ li::before {
            background: lightblue;
        }

        .rs-banner {
            position: relative; /* Ensure the banner container is positioned relative */
            background-color: #6D2BF3;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }

        .rs-banner::before {
            content: "";
            position: absolute; /* Position the overlay absolutely within the banner */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Add the semi-transparent color */
            z-index: 1; /* Ensure the overlay appears above the background image but below the content */
        }

        .rs-banner .container {
            position: relative; /* Position the content container relative */
            z-index: 2; /* Ensure the content appears above the overlay */
        }

        .cta-section {
            position: relative;
            text-align: center;
            z-index: 1;
            padding: 50px 0;
        }

        .auto-container {
            position: static;
            max-width: 1200px;
            padding: 0 15px;
            margin: 0 auto;
        }

        .sec-title-three.centered {
            text-align: center !important;
        }

        .sec-title-three {
            position: relative;
            margin: 20px 0 10px;
            font-size: 28px !important;
        }

        .serviceBox.blue {
            --color1: #011a40;
            --color2: #011a409e;
        }

        .serviceBox {
            color: var(--color1);
            font-family: "Poppins", sans-serif;
            text-align: center;
            padding: 12px 20px 35px;
            position: relative;
            z-index: 1;
        }

        .serviceBox .service-icon {
            background: #fff;
            font-size: 35px;
            line-height: 60px;
            width: 60px;
            height: 60px;
            margin: 0 auto 7px;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            position: relative;
        }

        .serviceBox .title {
            font-size: 18px;
            font-weight: 600;
            margin: 0 0 10px;
            min-height: 80px;
        }

        .serviceBox .description {
            color: #FA037B;
            font-size: 16px;
            font-weight: 800;
            line-height: 16px;
        }

        .serviceBox:before {
            min-height: 130px;
        }


        .serviceBox:before {
            content: "";
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5), 0 10px 0 var(--color1);
            position: absolute;
            left: 0;
            top: 53px;
            right: 0;
            bottom: 20px;
            z-index: -1;
        }


    </style>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <!-- Main content Start -->
    <div class="main-content">

        @include('partials.frontend_header')

        @php
            $slider= \App\Models\Slider::first();
        @endphp

        <div class="rs-banner main-home"
             @if($slider->image)
                 style="background-image: url({{$slider->image->original_url}});"
             @else
                 style="background-color: #011A40;"
            @endif>
            <div class="container">
                <div class="content-wrap">
                    <div class="prelements-heading water__slide_yes default text-center">
                        <div class="title-inner">
                            <h5 class="title">INTERNATIONAL CONFERENCE ON
                                PHARMACEUTICALS AND HEALTH
                                SCIENCE (ICPHS) 2024 </h5>
                        </div>
                    </div>
                    <h5 class="conference-title">“Advancements in Pharmaceuticals and Health
                        Sciences for Sustainable Development”</h5>
                    <h5 class="text-white university-name"><img src="/assets/images/event.png" alt="">
                        10–11 OCTOBER 2024</h5>
                    <h5 class="text-white university-name "><img src="/assets/images/contact/icons/1.png" alt="">
                        University of
                        Asia Pacific</h5>
                    <h5 class="text-white university-name"><img src="/assets/images/contact/icons/1.png" alt=""> Dhaka,
                        Bangladesh</h5>
                    <div class="btn-part desktop-hide" style="margin-top: 20px">
                        <a class="readon btn-text" href="/registration">
                            <span>Registration Now</span>
                            <img src="/assets/images/event.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <section class="countdown-section">
            <div class="text-center">

                <div id="countDiv" class="counter-div">
                    <div class="counter-element">
                        <div class="number-div">
                            <div class="days"></div>
                        </div>
                        <p class="element-text">Days</p>
                    </div>
                    <div class="counter-element">
                        <div class="number-div">
                            <div class="hours"></div>
                        </div>
                        <p class="element-text">Hours</p>
                    </div>
                    <div class="counter-element">
                        <div class="number-div">
                            <div class="minutes"></div>
                        </div>
                        <p class="element-text et-mobile">Min.</p>
                        <p class="element-text et-desktop">Minutes</p>
                    </div>
                    <div class="counter-element">
                        <div class="number-div">
                            <div class="seconds"></div>
                        </div>
                        <p class="element-text et-mobile">Sec.</p>
                        <p class="element-text et-desktop">Seconds</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- About Section Start -->


        @php

            $about= \App\Models\AboutManagement::first();

        @endphp

        <div class="rs-about main-home bg3   pt-5">
            <div class="container">
                <div class="row y-middle">


                    <div class="sec-title text-center">
                        <h1 class="sub-text">Welcome Message</h1>
                        <div class="heading-border-line"></div>


                        <p class="desc margin-0 pt-40 pb-25">
                            {!! $about->welcome_message ?? '' !!}
                        </p>

                    </div>

                </div>
            </div>
        </div>
        <div class="rs-about main-home bg3 pt-5 pb-5 ">
            <div class="container">
                <div class="sec-title text-center bg3 pt-5 pb-5 ">
                    <h1 class="sub-text">Welcome Video Message</h1>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row y-middle">
                    @if(count($about->video)>0 )

                        @foreach($about->video as $key => $media)
                            <div class="col-lg-6 pr-55 md-pr-15 md-mb-50">
                                <video width="100%" height="315" controls>
                                    <source src="{{ $media->original_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endforeach


                    @else
                        <div class="col-lg-6 pr-55 md-pr-15 md-mb-50">
                            <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/e0HlQh-hwyE">
                            </iframe>
                        </div>
                        <div class="col-lg-6 pr-55 md-pr-15 md-mb-50">
                            <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/e0HlQh-hwyE">
                            </iframe>
                        </div>
                    @endif





                </div>
            </div>
        </div>
        <!-- About Section End -->


        <!-- About Section Start -->
        <div class="rs-about main-home bg3 pt-5 pb-5 ">
            <div class="container">
                <div class="row y-middle">


                    <div class="col-lg-5">
                        <div class="sec-title">
                            <span class="sub-text">About Text</span>


                            <div class="heading-border-line left-style"></div>
                            <p class="desc margin-0 pt-40 pb-25">
                                 {!! $about->about_text ?? '' !!}
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7 pr-55 md-pr-15 md-mb-50">
                        <img src=" {{ $about->image->original_url ?? '/assets/images/bg/new.jpg'}}" width="100%">
                    </div>

                </div>
            </div>
        </div>
        <!-- About Section End -->


        <div class="rs-about main-home bg3   pt-5">
            <div class="container">
                <div class="row y-middle">


                    <div class="sec-title text-center">
                        <h1 class="sub-text">Scope of the conference</h1>
                        <div class="heading-border-line"></div>
                        <div class="row">
                            <div class="col-md-5 col-12 mx-auto">
                                <ul class="list-ic vertical ">
                                    <li>
                                        <span>1</span>
                                        <a href="#">Pharmaceutics and Industrial Pharmacy</a>
                                    </li>
                                    <li>
                                        <span>2</span>
                                        <a href="#">Pharmaceutical Chemistry and Natural Product</a>
                                    </li>
                                    <li>
                                        <span>3</span>
                                        <a href="#">Pharmaceutical Biotechnology</a>
                                    </li>
                                    <li>
                                        <span>4</span>
                                        <a href="#">Pharmacology & Toxicology</a>
                                    </li>
                                    <li>
                                        <span>5</span>
                                        <a href="#">Computational Biology</a>
                                    </li>
                                    <li>
                                        <span>6</span>
                                        <a href="#">Pharmacy Education and Clinical Pharmacy</a>
                                    </li>
                                    <li>
                                        <span>7</span>
                                        <a href="#">Complementary & Alternative Medicine</a>
                                    </li>
                                    <li>
                                        <span>8</span>
                                        <a href="#"> Infectious & Non-communicable Disease
                                            Oncology</a>
                                    </li>
                                    <li>
                                        <span>9</span>
                                        <a href="#"> Epidemiology and Allied Health Sciences</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>


        <section class="cta-section mt-0 mb-5 bg-light" id="important_date">
            <div class="auto-container">

                @php

                    $dates= \App\Models\ImportantDate::get();
                @endphp

                <div class="sec-title text-center bg3 pt-5 pb-5 ">
                    <span class="sub-text">Important Dates</span>

                    <div class="heading-border-line"></div>
                </div>

                <div class="row clearfix">

                    @foreach($dates as $res)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="serviceBox blue">
                                <div class="service-icon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                                <h3 class="title">{{$res->title ?? ''}} <br></h3>
                                <p class="description">
                                    {{$res->date ?? ''}} </p>
                            </div>
                        </div>

                    @endforeach

                    <!--  <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="serviceBox blue">
            <div class="service-icon">
                <span><i class="fa fa-calendar"></i></span>
            </div>
            <h3 class="title">Abstract Submission <br> Date</h3>
            <p class="description">
                15<sup>th</sup> December 2023</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="serviceBox blue">
            <div class="service-icon">
                <span><i class="fa fa-calendar"></i></span>
            </div>
            <h3 class="title">Full Paper Submission <br> Date</h3>
            <p class="description">09<sup>th</sup> January 2024</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="serviceBox blue">
            <div class="service-icon">
                <span><i class="fa fa-calendar"></i></span>
            </div>
            <h3 class="title">Registration Deadline <br> Date</h3>
            <p class="description">14<sup>th</sup> January 2024</p>
        </div>
    </div>-->
                </div>
            </div>

        </section>


        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3  md-pt-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Event Speakers</span>
                    <div class="heading-border-line"></div>
                </div>
                @php
                    $speakers= \App\Models\Speaker::get();

                @endphp

                <div class="owl-carousel owl-theme speaker-carousel">

                    @foreach($speakers as $speaker)

                        <div class="team-item">
                            <div class="team-img">
                                @if($speaker->image)
                                    <a href="{{$speaker->link ?? ''}}" target="_blank">
                                        <img src="{{$speaker->image->original_url ?? '/assets/images/ff.jpg'}}"
                                             alt="Team">
                                    </a>
                                @endif
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="name">
                                        <a href="">{{$speaker->name}}</a>
                                    </div>
                                    <span class="post">{{$speaker->designation}}</span>
                                </div>

                            </div>
                        </div>

                    @endforeach


                </div>


            </div>

        </div>
        <!-- Team end -->


        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-5 pb-5 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-65">
                    <span class="sub-text small">Stall</span>
                    <h2 class="title white-color pb-35">
                        Event Sponsorship
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                @php
                    $partner= \App\Models\Stall::get();
                @endphp
                <div class="owl-carousel owl-theme sponsor-carousel">
                    @foreach($partner as $stall)
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="{{$stall->link ?? ''}}" target="_blank">
                                        <img
                                            src="{{$stall->image->original_url ?? '/assets/images/event/sponsor/1.png'}}"
                                            alt="logo-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Our Sponsor Section End -->
        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-5 pb-5 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-65">
                    <span class="sub-text small">Strategic partner</span>
                    <h2 class="title white-color pb-35">
                        Event Sponsorship
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                @php
                    $partner= \App\Models\StrategicPartner::get();
                @endphp
                <div class="owl-carousel owl-theme sponsor-carousel">
                    @foreach($partner as $stall)
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="{{$stall->link ?? ''}}" target="_blank">
                                        <img
                                            src="{{$stall->image->original_url ?? '/assets/images/event/sponsor/1.png'}}"
                                            alt="logo-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Our Sponsor Section End -->


    </div>
    <!-- Main content End -->



    <script>
        $(document).ready(function () {
            $('.speaker-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,  // Disable navigation buttons
                dots: false,  // Enable dots
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $('.sponsor-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,  // Disable navigation buttons
                dots: false,  // Enable dots
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1200: {
                        items: 6
                    }
                }
            });
        });
    </script>

@endsection
