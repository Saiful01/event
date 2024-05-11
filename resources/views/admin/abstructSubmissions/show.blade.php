@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.abstructSubmission.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.abstruct-submissions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.abstructSubmission.fields.id') }}
                        </th>
                        <td>
                            {{ $abstructSubmission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.abstructSubmission.fields.name') }}
                        </th>
                        <td>
                            {{ $abstructSubmission->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.abstructSubmission.fields.phone') }}
                        </th>
                        <td>
                            {{ $abstructSubmission->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.abstructSubmission.fields.email') }}
                        </th>
                        <td>
                            {{ $abstructSubmission->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.abstructSubmission.fields.address') }}
                        </th>
                        <td>
                            {{ $abstructSubmission->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.abstructSubmission.fields.file') }}
                        </th>
                        <td>
                            @if($abstructSubmission->file)
                                <a href="{{ $abstructSubmission->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.abstruct-submissions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection