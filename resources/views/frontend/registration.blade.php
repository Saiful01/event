

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

        $data= \App\Models\AboutManagement::first();

        @endphp

        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                  {{--  {!! $data->abstract ?? '' !!}--}}
                </div>
            </div>

        </div>
        <!-- Contact Section Start -->
        <div class="rs-contact home-style1 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-85 md-mb-50">
                    <span class="sub-text">Registration</span>
                    <h2 class="title pb-26">
                       Registration Form
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row y-middle">

                    <div class="col-lg-8 pr-50 md-pr-15 md-mb-50 mx-auto">

                    </div>
                </div>
            </div>

        </div>
        <!-- Contact Section End -->>

    </div>
    <!-- Main content End -->


@endsection
