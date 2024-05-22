@extends('layouts.frontend')
@section('content')

    <style>
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

    <!-- Main content Start -->
    <div class="main-content">

        @include('partials.frontend_header')

        <!-- Banner Section Start -->
        <div class="rs-banner main-home" style=" background-color: #011A40">
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
                    <h5 class="text-white university-name"><img src="/assets/images/event.png" alt="" >
                        10–11 OCTOBER 2024</h5>
                    <h5 class="text-white university-name "><img src="/assets/images/contact/icons/1.png" alt="" >
                        University of
                        Asia Pacific</h5>
                    <h5 class="text-white university-name"><img src="/assets/images/contact/icons/1.png" alt="" > Dhaka,
                        Bangladesh</h5>


                    <div class="btn-part desktop-hide" style="margin-top: 20px">
                        <a class="readon btn-text" href="">
                            <span>Registration Now</span>
                            <img src="/assets/images/event.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


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

        <div class="rs-about main-home bg3  md-pt-80 md-pb-80 pt-5">
            <div class="container">
                <div class="row y-middle">


                    <div class="sec-title text-center">
                        <h1 class="sub-text">Welcome Message</h1>
                        <div class="heading-border-line"></div>


                        <p class="desc margin-0 pt-40 pb-25">
                            {{ $about->welcome_message ?? ''}}
                        </p>

                    </div>

                </div>
            </div>
        </div>
        <div class="rs-about main-home bg3 pt-5 pb-5 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center bg3 pt-5 pb-5 ">
                    <h1 class="sub-text">Welcome Video Message</h1>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row y-middle">
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

                </div>
            </div>
        </div>
        <!-- About Section End -->


        <!-- About Section Start -->
        <div class="rs-about main-home bg3 pt-5 pb-5 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row y-middle">


                    <div class="col-lg-5">
                        <div class="sec-title">
                            <span class="sub-text">About Text</span>


                            <div class="heading-border-line left-style"></div>
                            <p class="desc margin-0 pt-40 pb-25">
                                {{ $about->about_text ?? ''}}
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



        <section class="cta-section mt-0 mb-5 bg-light">
            <div class="auto-container">

                <div class="sec-title text-center bg3 pt-5 pb-5 ">
                    <span class="sub-text">Important Dates</span>

                    <div class="heading-border-line"></div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="serviceBox blue">
                            <div class="service-icon">
                                <span><i class="fa fa-calendar"></i></span>
                            </div>
                            <h3 class="title">Early Bird Registration Deadline <br> </h3>
                            <p class="description">
                                3<sup>rd</sup> April 2024</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="serviceBox blue">
                            <div class="service-icon">
                                <span><i class="fa fa-calendar"></i></span>
                            </div>
                            <h3 class="title">Abstract Submission Deadline <br> </h3>
                            <p class="description">
                                6<sup>th</sup> May 2024</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="serviceBox blue">
                            <div class="service-icon">
                                <span><i class="fa fa-calendar"></i></span>
                            </div>
                            <h3 class="title">Full paper Submission Deadline <br> </h3>
                            <p class="description">
                                11<sup>th</sup> May 2024</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="serviceBox blue">
                            <div class="service-icon">
                                <span><i class="fa fa-calendar"></i></span>
                            </div>
                            <h3 class="title">Registration Deadline <br> </h3>
                            <p class="description">
                                17<sup>th</sup> May 2024</p>
                        </div>
                    </div>
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




        <!-- Team Section Start -->
        <div class="rs-team style1 bg5 pt-5 pb-5 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Event Speakers</span>

                    <div class="heading-border-line"></div>
                </div>
                @php
                $speakers= \App\Models\Speaker::get();


                @endphp
                <div class="row">
                    @foreach($speakers as $speaker)
                        <div class="col-lg-3 col-md-6 mb-35">
                            <div class="team-item">
                                <div class="team-inner-wrap">
                                    <div class="images-wrap">

                                        @if($speaker->image)
                                            <a href="{{$speaker->link ?? ''}}" target="_blank">
                                                <img src="{{$speaker->image->original_url ?? '/assets/images/ff.jpg'}}" alt="Team">
                                            </a>
                                        @endif
                                        <div class="team-content text-center">
                                            <h3 class="title-name"><a href="{{$speaker->link ?? ''}}" target="_blank">{{$speaker->name ?? ''}}</a></h3>
                                            <div class="team-title">{{$speaker->designation ?? ''}}</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Team Section Start -->


        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-5 pb-5 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-65">
                    <span class="sub-text small">Our Sponsor</span>
                    <h2 class="title white-color pb-35">
                        Event Sponsorship
                    </h2>
                    <div class="heading-border-line"></div>
                </div>

                @php

                $partner= \App\Models\StrategicPartner::get();
                @endphp
                <div class="row">
                    @foreach($partner as $stall)
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="{{$stall->link ?? ''}}" target="_blank"><img src="{{$stall->image->original_url ?? '/assets/images/event/sponsor/1.png'}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        <!-- Our Sponsor Section Start -->




    </div>
    <!-- Main content End -->

@endsection
