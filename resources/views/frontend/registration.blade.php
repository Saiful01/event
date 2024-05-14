

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
                        Registration
                        <span class="watermark">Registration</span>
                    </h1>
                </div>
            </div>
        </div>

        @php

        $data= \App\Models\Event::first();

        @endphp

        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    {!! $data->registration_rules ?? '' !!}
                </div>
            </div>

        </div>
        <!-- Contact Section Start -->
        <div class="rs-contact home-style1 home-style3 bg16 pt-120 md-pt-80">
            <div class="container">

                <!-- Contact Section Start -->
                <div class="rs-contact pt-120 md-pt-80">

                    <div class="row">

                        <div class="col-lg-8 mx-auto">
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                            </div>

                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <div class="submit-btn">
                                                    <input class="submit" type="submit" value="Submit Now">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->
            </div>

        </div>
        <!-- Contact Section End -->

    </div>
    <!-- Main content End -->


@endsection
