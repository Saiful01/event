@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.submission.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.submissions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.submission.fields.id') }}
                        </th>
                        <td>
                            {{ $submission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.submission.fields.abstract') }}
                        </th>
                        <td>
                            {!! $submission->abstract !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.submission.fields.full_paper') }}
                        </th>
                        <td>
                            {!! $submission->full_paper !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.submissions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection