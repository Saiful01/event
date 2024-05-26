

@extends('layouts.frontend')
@section('content')

<!-- Main content Start -->
<div class="main-content">

  @include('partials.frontend_header')


    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs " style="background-color: #011A40">
        <div class="container">
            <div class="breadcrumbs-inner">
                @if($id == 1)

                    <h1 class="page-title">
                        About The Conference
                        <span class="watermark"> About The Conference</span>
                    </h1>
                @elseif($id == 2)


                    <h1 class="page-title">
                        Scope Of The Conference
                        <span class="watermark"> Scope Of The Conference</span>
                    </h1>

                @elseif($id ==3)


                    <h1 class="page-title">
                        Program Schedule
                        <span class="watermark">Program Schedule</span>
                    </h1>
                @else
                    <h1 class="page-title">
                        <span class="watermark"></span>
                    </h1>


                @endif

            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div id="rs-team" class="rs-team style3 pt-120 pb-120 md-pt-80">
        <div class="container">
            <div class="row">
              @if($id == 1)
                  {!! $data->about_the_conference ?? '' !!}
                @elseif($id == 2)

                    {!! $data->scope_of_the_conference ?? '' !!}

                @elseif($id ==3)

                    {!! $data->program_schedule ?? '' !!}
                @else
                  <h1 class="text-danger text-center"> No data Found</h1>


              @endif
            </div>
        </div>

    </div>
    <!-- Team end -->

</div>
<!-- Main content End -->


@endsection
