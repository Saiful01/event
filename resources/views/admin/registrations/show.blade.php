@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.registration.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registrations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.id') }}
                        </th>
                        <td>
                            {{ $registration->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.email') }}
                        </th>
                        <td>
                            {{ $registration->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.title') }}
                        </th>
                        <td>
                            {{ App\Models\Registration::TITLE_SELECT[$registration->title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.full_name') }}
                        </th>
                        <td>
                            {{ $registration->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Registration::GENDER_SELECT[$registration->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.institution') }}
                        </th>
                        <td>
                            {{ $registration->institution }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.profession') }}
                        </th>
                        <td>
                            {{ App\Models\Registration::PROFESSION_SELECT[$registration->profession] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.current_position') }}
                        </th>
                        <td>
                            {{ $registration->current_position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.faculty') }}
                        </th>
                        <td>
                            {{ $registration->faculty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.department') }}
                        </th>
                        <td>
                            {{ $registration->department }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.research_field') }}
                        </th>
                        <td>
                            {{ $registration->research_field }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.address') }}
                        </th>
                        <td>
                            {{ $registration->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.city') }}
                        </th>
                        <td>
                            {{ $registration->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $registration->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.country') }}
                        </th>
                        <td>
                            {{ $registration->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.mobile') }}
                        </th>
                        <td>
                            {{ $registration->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registration.fields.payment_slip') }}
                        </th>
                        <td>
                            @if($registration->payment_slip)
                                <a href="{{ $registration->payment_slip->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registrations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection