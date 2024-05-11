@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.venu.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.venus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.venu.fields.id') }}
                        </th>
                        <td>
                            {{ $venu->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.venu.fields.suggested_accommodation') }}
                        </th>
                        <td>
                            {!! $venu->suggested_accommodation !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.venu.fields.host_venu') }}
                        </th>
                        <td>
                            {{ $venu->host_venu }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.venus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection