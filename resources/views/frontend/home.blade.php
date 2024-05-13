@extends('layouts.frontend')
@section('content')

    <!-- Main content Start -->
    <div class="main-content">

        @include('partials.frontend_header')

        <!-- Banner Section Start -->
        <div class="rs-banner main-home" style=" background-color: #433c9e">
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
                    <h5 class="text-white university-name"><img src="/assets/images/event.png" alt="" width="30px">
                        10–11 OCTOBER 2024</h5>
                    <h5 class="text-white "><img src="/assets/images/contact/icons/1.png" alt="" width="30px">
                        University of
                        Asia Pacific</h5>
                    <h5 class="text-white"><img src="/assets/images/contact/icons/1.png" alt="" width="30px"> Dhaka,
                        Bangladesh</h5>


                    <div class="btn-part " style="margin-top: 20px">
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
        <div class="rs-about main-home bg3 pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-7 pr-55 md-pr-15 md-mb-50">
                        <iframe width="100%" height="315"
                                src="https://www.youtube.com/embed/e0HlQh-hwyE">
                        </iframe>
                    </div>
                    <div class="col-lg-5">
                        <div class="sec-title">
                            <span class="sub-text">Welcome Message</span>

                            <div class="heading-border-line left-style"></div>
                            <p class="desc margin-0 pt-40 pb-25">
                                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->


        <!-- About Section Start -->
        <div class="rs-about main-home bg3 pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row y-middle">


                    <div class="col-lg-5">
                        <div class="sec-title">
                            <span class="sub-text">About Text</span>

                            <div class="heading-border-line left-style"></div>
                            <p class="desc margin-0 pt-40 pb-25">
                                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7 pr-55 md-pr-15 md-mb-50">
                        <img src="/assets/images/bg/new.jpg" width="100%">
                    </div>

                </div>
            </div>
        </div>
        <!-- About Section End -->


        <!-- Our Event Schedule Start -->
        <div id="rs-events-schedule" class="rs-events-schedule rs-events-schedule2 bg6 pt-120 pb-90 md-pt-80 md-pb-50">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Important Date</span>
                    <h2 class="title white-color pb-35">
                        Event Schedules
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="events-schedule-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav eventday-list">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#sunday">Day 1
                                        <span>2022-03-13</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#monday">Day 2
                                        <span>2022-03-14</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tuesday">Day 3
                                        <span>2022-03-14</span></a>
                                </li>
                            </ul>
                            <div class="events-schedule-contents tab-content schedule-one">
                                <div class="tab-pane events-shedule-des active show" id="sunday">
                                    <div class="row">
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title"> Introduction Business</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>10:00-12:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/1.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Allu Arjun</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/2.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Odette Annable</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Digital Marketing Theory</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>12:00-2:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/3.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Tiger Shroff</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/4.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Dakota Fanning</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>2:00-3:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="/assets/images/tab/5.jpg" alt="Images">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Marketing Workshop</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>3:00-5:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/6.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Mila Kunis</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/7.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Angelina Jolie</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane events-shedule-des" id="monday">
                                    <div class="row">
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Marketing Workshop</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>10:12-5:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/4.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Dakota Fanning</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/7.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Angelina Jolie</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>12:00-1:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="/assets/images/tab/5.jpg" alt="Images">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Reinventing Experiences</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>1:00-3:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/6.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Mila Kunis</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/1.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Allu Arjun</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane events-shedule-des" id="tuesday">
                                    <div class="row">
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Cultures of Creativity</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>12:00-2:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/2.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Odette Annable</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/4.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Dakota Fanning</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>2:00-3:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="/assets/images/tab/5.jpg" alt="Images">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-items col-lg-6">
                                            <div class="event-author">
                                                <div class="event-shedule-info">
                                                    <h3 class="event-title">Introduction Business</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also
                                                        resurrected
                                                        Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li><i class="fa fa-clock-o"></i>1:00-5:00</li>
                                                        <li><i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>
                                                </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/7.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Angelina Jolie</span>
                                                        </div>
                                                    </div>
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img
                                                                    src="/assets/images/tab/1.jpg"
                                                                    alt="Images"></a>
                                                            <span class="tooltiptext">Allu Arjun</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Event Schedule End -->

        <!-- Team Section Start -->
        <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Event Speakers</span>
                    <h2 class="title pb-35">
                        Founders From Around The<br>
                        Globe Sharing Experence
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    @for($i =1; $i <=4 ; $i++)
                        <div class="col-lg-3 col-md-6 mb-35">
                            <div class="team-item">
                                <div class="team-inner-wrap">
                                    <div class="images-wrap">
                                        <a href=""><img src="/assets/images/ff.jpg" alt="Team"></a>
                                        <div class="team-content text-center">
                                            <h3 class="title-name"><a href="">Michel Holding</a></h3>
                                            <div class="team-title">CEO & Founder</div>
                                            <ul class="social-icons">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
        <!-- Team Section Start -->


        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-120 pb-120 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-65">
                    <span class="sub-text small">Our Sponsor</span>
                    <h2 class="title white-color pb-35">
                        Event Sponsorship
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/1.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/2.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/3.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/4.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/5.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/6.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/7.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="/assets/images/event/sponsor/8.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Our Sponsor Section Start -->


        <!-- Contact Section Start -->
        <div class="rs-contact home-style1 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-85 md-mb-50">
                    <span class="sub-text">Venue</span>
                    <h2 class="title pb-26">
                        Event Location
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row y-middle">
                    <div class="col-lg-8 pr-50 md-pr-15 md-mb-50">
                        <div class="contact-map">
                            <iframe
                                src="https://maps.google.com/maps?q=rstheme&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-item mb-20">
                            <div class="widget-img">
                                <img src="/assets/images/contact/icons/2-1.png" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="/assets/images/contact/icons/1.png" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title"> Address</h3>
                                    <p class="services-txt">
                                        55 Gerad Lane, <br>
                                        NY 11201, USA
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-item mb-20">
                            <div class="widget-img">
                                <img src="/assets/images/contact/icons/2-2.png" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="/assets/images/contact/icons/2.png" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title">Email us</h3>
                                    <p class="services-txt">
                                        demo@evenio.org <br>
                                        demo2@evenio.org
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-item">
                            <div class="widget-img">
                                <img src="/assets/images/contact/icons/2-3.png" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="/assets/images/contact/icons/3.png" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title">Call us</h3>
                                    <p class="services-txt">
                                        <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
                                        <a href="tel:(+088)222-9999">(+088) 222-9999</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Contact Section End -->

    </div>
    <!-- Main content End -->

@endsection
