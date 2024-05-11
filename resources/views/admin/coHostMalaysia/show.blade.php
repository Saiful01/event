@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.coHostMalaysium.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.co-host-malaysia.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.id') }}
                        </th>
                        <td>
                            {{ $coHostMalaysium->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.name') }}
                        </th>
                        <td>
                            {{ $coHostMalaysium->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.details') }}
                        </th>
                        <td>
                            {!! $coHostMalaysium->details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.link') }}
                        </th>
                        <td>
                            {{ $coHostMalaysium->link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.image') }}
                        </th>
                        <td>
                            @if($coHostMalaysium->image)
                                <a href="{{ $coHostMalaysium->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $coHostMalaysium->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.co-host-malaysia.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection