@extends('layouts.frontend')
@section('content')

    <!-- Main content Start -->
    <div class="main-content">

        @include('partials.frontend_header')


        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs " style="background-color: #011A40">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">
                        EXHIBITION & SPONSORSHIP
                        <span class="watermark">Stall</span>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-120  md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Stall</span>

                    <div class="heading-border-line"></div>
                </div>

                <div class="row">

                    @foreach($data as $stall)
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

        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8  pb-120 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Strategic Partner</span>

                    <div class="heading-border-line"></div>
                </div>

                <div class="row">

                    @foreach($sponsor as $stall)
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
