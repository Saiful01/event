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
                        Announcement
                        <span class="watermark">Announcement</span>
                    </h1>
                </div>
            </div>
        </div>


        <div class="rs-inner-blog pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="row">

                            @php

                                $blogs= \App\Models\Announcement::OrderBy('created_at', "DESC")->get();
                            @endphp
                            @foreach($blogs as $blog)
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">

                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="">{{$blog->title ?? ''}}</a></h3>

                                            <div class="blog-desc">
                                                {!! $blog->description ?? '' !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
    <!-- Main content End -->

@endsection
