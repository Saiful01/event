

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
                        Abstract
                        <span class="watermark">Abstract</span>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="row">

                        {!! $data->abstract ?? '' !!}

                </div>
            </div>

        </div>
        <!-- Team end -->

    </div>
    <!-- Main content End -->


@endsection
