@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.strategicPartner.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.strategic-partners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.strategicPartner.fields.id') }}
                        </th>
                        <td>
                            {{ $strategicPartner->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.strategicPartner.fields.name') }}
                        </th>
                        <td>
                            {{ $strategicPartner->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.strategicPartner.fields.details') }}
                        </th>
                        <td>
                            {!! $strategicPartner->details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.strategicPartner.fields.link') }}
                        </th>
                        <td>
                            {{ $strategicPartner->link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.strategicPartner.fields.image') }}
                        </th>
                        <td>
                            @if($strategicPartner->image)
                                <a href="{{ $strategicPartner->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $strategicPartner->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.strategic-partners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection