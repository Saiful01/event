

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
                        Speaker
                        <span class="watermark">Speaker</span>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Invited guest</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data1 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    @if($speaker->image)
                                        <a href="{{ $speaker->image->getUrl() }}" target="_blank" >
                                            <img src="{{ $speaker->image->original_url }}">
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
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div  class="rs-team style3  md-pt-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">keynote speaker</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data2 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    @if($speaker->image)
                                        <a href="{{ $speaker->image->getUrl() }}" target="_blank" >
                                            <img src="{{ $speaker->image->original_url }}">
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
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div  class="rs-team style3  md-pt-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Plenary speaker</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data3 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    @if($speaker->image)
                                        <a href="{{ $speaker->image->getUrl() }}" target="_blank" >
                                            <img src="{{ $speaker->image->original_url }}">
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
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div  class="rs-team style3 pb-120  md-pt-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Invited speaker</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                   @foreach($data4 as $speaker)
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    @if($speaker->image)
                                        <a href="{{ $speaker->image->getUrl() }}" target="_blank" >
                                            <img src="{{ $speaker->image->original_url }}">
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
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Team Section Start -->

    </div>
    <!-- Main content End -->


@endsection
