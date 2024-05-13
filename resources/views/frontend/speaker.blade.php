

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
                        Speaker
                        <span class="watermark">Speaker</span>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Invited guest</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data1 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-35">
                            <div class="team-item">
                                <div class="team-inner-wrap">
                                    <div class="images-wrap">
                                        <a href="{{$speaker->link ?? ''}}" target="_blank"><img src="{{$speaker->guest ?? '/assets/images/ff.jpg'}}" alt="Team"></a>
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
        <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">keynote speaker</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data2 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-35">
                            <div class="team-item">
                                <div class="team-inner-wrap">
                                    <div class="images-wrap">
                                        <a href="{{$speaker->link ?? ''}}" target="_blank"><img src="{{$speaker->guest ?? '/assets/images/ff.jpg'}}" alt="Team"></a>
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
        <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Plenary speaker</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data3 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-35">
                            <div class="team-item">
                                <div class="team-inner-wrap">
                                    <div class="images-wrap">
                                        <a href="{{$speaker->link ?? ''}}" target="_blank"><img src="{{$speaker->guest ?? '/assets/images/ff.jpg'}}" alt="Team"></a>
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
        <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Invited speaker</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data4 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-35">
                            <div class="team-item">
                                <div class="team-inner-wrap">
                                    <div class="images-wrap">
                                        <a href="{{$speaker->link ?? ''}}" target="_blank"><img src="{{$speaker->guest ?? '/assets/images/ff.jpg'}}" alt="Team"></a>
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

    </div>
    <!-- Main content End -->


@endsection
