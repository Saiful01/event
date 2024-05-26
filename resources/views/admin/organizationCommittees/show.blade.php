@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.organizationCommittee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.organization-committees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.organizationCommittee.fields.id') }}
                        </th>
                        <td>
                            {{ $organizationCommittee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organizationCommittee.fields.name') }}
                        </th>
                        <td>
                            {{ $organizationCommittee->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organizationCommittee.fields.designation') }}
                        </th>
                        <td>
                            {{ $organizationCommittee->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organizationCommittee.fields.details') }}
                        </th>
                        <td>
                            {!! $organizationCommittee->details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organizationCommittee.fields.image') }}
                        </th>
                        <td>
                            @if($organizationCommittee->image)
                                <a href="{{ $organizationCommittee->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $organizationCommittee->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organizationCommittee.fields.category') }}
                        </th>
                        <td>
                            {{ $organizationCommittee->category->title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.organization-committees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection