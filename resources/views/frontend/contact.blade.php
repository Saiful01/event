@extends('layouts.frontend')
@section('content')

    <!-- Main content Start -->
    <div class="main-content">

        @include('partials.frontend_header')


        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs " style="background-color: #0a53be">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">
                        Contact
                        <span class="watermark">Contact</span>
                    </h1>
                </div>
            </div>
        </div>

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
