@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.event.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.id') }}
                        </th>
                        <td>
                            {{ $event->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.title') }}
                        </th>
                        <td>
                            {{ $event->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.sub_title') }}
                        </th>
                        <td>
                            {{ $event->sub_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.date') }}
                        </th>
                        <td>
                            {{ $event->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.start_date') }}
                        </th>
                        <td>
                            {{ $event->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.university') }}
                        </th>
                        <td>
                            {{ $event->university }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.address') }}
                        </th>
                        <td>
                            {{ $event->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.website_logo') }}
                        </th>
                        <td>
                            @if($event->website_logo)
                                <a href="{{ $event->website_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $event->website_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_logo') }}
                        </th>
                        <td>
                            @if($event->event_logo)
                                <a href="{{ $event->event_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $event->event_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection