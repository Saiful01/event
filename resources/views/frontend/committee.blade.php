

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
                        Organization committee
                        <span class="watermark">Organization committee</span>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="row">

                    @if(count($commitee) > 0 )

                        @foreach($commitee as $data)

                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    @if($data->image)
                                        <a href="{{ $data->image->getUrl() }}" target="_blank" >
                                            <img src="{{ $data->image->original_url }}">
                                        </a>
                                    @endif
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="name">
                                            <a href="">{{$data->name}}</a>
                                        </div>
                                        <span class="post">{{$data->designation}}</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @endforeach


                    @else

                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    <a href="speaker-single.html"><img src="/assets/images/team/1.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="name">
                                            <a href="speaker-single.html">Tom Cruise</a>
                                        </div>
                                        <span class="post">Graphic Designer</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    <a href="speaker-single.html"><img src="/assets/images/team/2.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="name">
                                            <a href="speaker-single.html">Megan Fox</a>
                                        </div>
                                        <span class="post">Founder & CEO</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="team-item">
                                <div class="team-img">
                                    <a href="speaker-single.html"><img src="/assets/images/team/3.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="name">
                                            <a href="speaker-single.html">Will Smith</a>
                                        </div>
                                        <span class="post">Business Advisor</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    @endif

                </div>
            </div>

        </div>
        <!-- Team end -->

    </div>
    <!-- Main content End -->


@endsection
