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
                        Registration
                        <span class="watermark">Registration</span>
                    </h1>
                </div>
            </div>
        </div>

        @php

            $data= \App\Models\Event::first();

        @endphp

            <!-- Team Start -->
        <div id="rs-team" class="rs-team style3 pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    {!! $data->registration_rules ?? '' !!}
                </div>
            </div>

        </div>
        <!-- Contact Section Start -->
        <div class="rs-contact home-style1 home-style3 bg16 pt-120 md-pt-80">
            <div class="container">

                <!-- Contact Section Start -->
                <div class="rs-contact pt-120 md-pt-80">
                    <h1 class="text-center"> Registration Form </h1>

                    <div class="row">

                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="contact-wrap">
                                        <div id="form-messages"></div>
                                        <form method="post" action="/registration-submit" enctype="multipart/form-data">

                                            @csrf
                                            <div class="form-group">
                                                <label class="required"
                                                       for="email">{{ trans('cruds.registration.fields.email') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    type="email" name="email" id="email" value="{{ old('email') }}"
                                                    required>
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.email_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    class="required">{{ trans('cruds.registration.fields.title') }}</label>
                                                <select
                                                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                                    name="title" id="title" required>
                                                    <option value
                                                            disabled {{ old('title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                                    @foreach(App\Models\Registration::TITLE_SELECT as $key => $label)
                                                        <option
                                                            value="{{ $key }}" {{ old('title', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('title'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('title') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.title_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="required"
                                                       for="full_name">{{ trans('cruds.registration.fields.full_name') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}"
                                                    type="text" name="full_name" id="full_name"
                                                    value="{{ old('full_name', '') }}" required>
                                                @if($errors->has('full_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('full_name') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.full_name_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    class="required">{{ trans('cruds.registration.fields.gender') }}</label>
                                                <select
                                                    class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                                    name="gender" id="gender" required>
                                                    <option value
                                                            disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                                    @foreach(App\Models\Registration::GENDER_SELECT as $key => $label)
                                                        <option
                                                            value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('gender'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('gender') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.gender_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="required"
                                                       for="institution">{{ trans('cruds.registration.fields.institution') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('institution') ? 'is-invalid' : '' }}"
                                                    type="text" name="institution" id="institution"
                                                    value="{{ old('institution', '') }}" required>
                                                @if($errors->has('institution'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('institution') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.institution_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label>{{ trans('cruds.registration.fields.profession') }}</label>
                                                <select
                                                    class="form-control {{ $errors->has('profession') ? 'is-invalid' : '' }}"
                                                    name="profession" id="profession">
                                                    <option value
                                                            disabled {{ old('profession', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                                    @foreach(App\Models\Registration::PROFESSION_SELECT as $key => $label)
                                                        <option
                                                            value="{{ $key }}" {{ old('profession', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('profession'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('profession') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.profession_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="current_position">{{ trans('cruds.registration.fields.current_position') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('current_position') ? 'is-invalid' : '' }}"
                                                    type="text" name="current_position" id="current_position"
                                                    value="{{ old('current_position', '') }}">
                                                @if($errors->has('current_position'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('current_position') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.current_position_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="faculty">{{ trans('cruds.registration.fields.faculty') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('faculty') ? 'is-invalid' : '' }}"
                                                    type="text" name="faculty" id="faculty"
                                                    value="{{ old('faculty', '') }}">
                                                @if($errors->has('faculty'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('faculty') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.faculty_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="department">{{ trans('cruds.registration.fields.department') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}"
                                                    type="text" name="department" id="department"
                                                    value="{{ old('department', '') }}">
                                                @if($errors->has('department'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('department') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.department_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="research_field">{{ trans('cruds.registration.fields.research_field') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('research_field') ? 'is-invalid' : '' }}"
                                                    type="text" name="research_field" id="research_field"
                                                    value="{{ old('research_field', '') }}">
                                                @if($errors->has('research_field'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('research_field') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.research_field_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="address">{{ trans('cruds.registration.fields.address') }}</label>
                                                <textarea
                                                    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                                    name="address" id="address">{{ old('address') }}</textarea>
                                                @if($errors->has('address'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('address') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.address_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="city">{{ trans('cruds.registration.fields.city') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                                    type="text" name="city" id="city" value="{{ old('city', '') }}">
                                                @if($errors->has('city'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('city') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.city_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="postal_code">{{ trans('cruds.registration.fields.postal_code') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}"
                                                    type="text" name="postal_code" id="postal_code"
                                                    value="{{ old('postal_code', '') }}">
                                                @if($errors->has('postal_code'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('postal_code') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.postal_code_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="country">{{ trans('cruds.registration.fields.country') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                                    type="text" name="country" id="country"
                                                    value="{{ old('country', '') }}">
                                                @if($errors->has('country'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('country') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.country_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="mobile">{{ trans('cruds.registration.fields.mobile') }}</label>
                                                <input
                                                    class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}"
                                                    type="text" name="mobile" id="mobile"
                                                    value="{{ old('mobile', '') }}">
                                                @if($errors->has('mobile'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('mobile') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.registration.fields.mobile_helper') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="payment_slip">{{ trans('cruds.registration.fields.payment_slip') }}</label>
                                                <div class="needsclick dropzone {{ $errors->has('payment_slip') ? 'is-invalid' : '' }}" id="payment_slip-dropzone">
                                                </div>
                                                @if($errors->has('payment_slip'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('payment_slip') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.registration.fields.payment_slip_helper') }}</span>
                                            </div>
                                            <div class="btn-part mt-2">
                                                <div class="form-group mb-0">
                                                    <div class="submit-btn">
                                                        <button class="submit" type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->
            </div>

        </div>
        <!-- Contact Section End -->

@endsection

        @section('scripts')
            <script>
                Dropzone.options.paymentSlipDropzone = {
                    url: '{{ route('admin.registrations.storeMedia') }}',
                    maxFilesize: 5, // MB
                    maxFiles: 1,
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    params: {
                        size: 5
                    },
                    success: function (file, response) {
                        $('form').find('input[name="payment_slip"]').remove()
                        $('form').append('<input type="hidden" name="payment_slip" value="' + response.name + '">')
                    },
                    removedfile: function (file) {
                        file.previewElement.remove()
                        if (file.status !== 'error') {
                            $('form').find('input[name="payment_slip"]').remove()
                            this.options.maxFiles = this.options.maxFiles + 1
                        }
                    },
                    init: function () {
                        @if(isset($registration) && $registration->payment_slip)
                        var file = {!! json_encode($registration->payment_slip) !!}
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="payment_slip" value="' + file.file_name + '">')
                        this.options.maxFiles = this.options.maxFiles - 1
                        @endif
                    },
                    error: function (file, response) {
                        if ($.type(response) === 'string') {
                            var message = response //dropzone sends it's own error messages in string
                        } else {
                            var message = response.errors.file
                        }
                        file.previewElement.classList.add('dz-error')
                        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                        _results = []
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            node = _ref[_i]
                            _results.push(node.textContent = message)
                        }

                        return _results
                    }
                }
            </script>
@endsection
