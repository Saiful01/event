

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


        @foreach($commitee as $item)
        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">{{$item->title}}</span>

                    <div class="heading-border-line"></div>
                </div>
                <div class="row">



                        @foreach($item->categoryOrganizationCommittees as $data)

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

                </div>
            </div>

        </div>
        <!-- Team end -->

        @endforeach

    </div>
    <!-- Main content End -->


@endsection
