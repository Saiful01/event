@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.stall.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.stalls.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.stall.fields.id') }}
                        </th>
                        <td>
                            {{ $stall->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stall.fields.name') }}
                        </th>
                        <td>
                            {{ $stall->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stall.fields.link') }}
                        </th>
                        <td>
                            {{ $stall->link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stall.fields.image') }}
                        </th>
                        <td>
                            @if($stall->image)
                                <a href="{{ $stall->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $stall->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stall.fields.details') }}
                        </th>
                        <td>
                            {{ $stall->details }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.stalls.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection