@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutManagement.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-managements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutManagement->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.welcome_message') }}
                        </th>
                        <td>
                            {{ $aboutManagement->welcome_message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.about_text') }}
                        </th>
                        <td>
                            {{ $aboutManagement->about_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.about_the_conference') }}
                        </th>
                        <td>
                            {!! $aboutManagement->about_the_conference !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.scope_of_the_conference') }}
                        </th>
                        <td>
                            {!! $aboutManagement->scope_of_the_conference !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.program_schedule') }}
                        </th>
                        <td>
                            {!! $aboutManagement->program_schedule !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.image') }}
                        </th>
                        <td>
                            @if($aboutManagement->image)
                                <a href="{{ $aboutManagement->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutManagement->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutManagement.fields.video') }}
                        </th>
                        <td>
                            @if($aboutManagement->video)
                                <a href="{{ $aboutManagement->video->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-managements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection