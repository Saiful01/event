

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
                        Full paper
                        <span class="watermark">Full paper</span>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 pb-120 md-pt-80">
            <div class="container">
                <div class="row">

                    {!! $data->full_paper ?? '' !!}

                </div>
            </div>

        </div>
        <!-- Team end -->

        <div class="container pb-120">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Full Paper Submission

                    </div>

                    <div class="card-body">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ trans('cruds.abstructSubmission.fields.name') }}</label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.abstructSubmission.fields.name_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="phone">{{ trans('cruds.abstructSubmission.fields.phone') }}</label>
                                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                                @if($errors->has('phone'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.abstructSubmission.fields.phone_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="email">{{ trans('cruds.abstructSubmission.fields.email') }}</label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.abstructSubmission.fields.email_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="address">{{ trans('cruds.abstructSubmission.fields.address') }}</label>
                                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}">
                                @if($errors->has('address'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('address') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.abstructSubmission.fields.address_helper') }}</span>

                            </div>
                            <div class="form-group">
                                <label for="file">{{ trans('cruds.abstructSubmission.fields.file') }}</label>

                                <input type="file" class="form-control" name="file">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main content End -->


@endsection
