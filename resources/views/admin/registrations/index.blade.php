@extends('layouts.admin')
@section('content')
@can('registration_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.registrations.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.registration.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.registration.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Registration">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.full_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.institution') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.profession') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.current_position') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.faculty') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.department') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.research_field') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.postal_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.mobile') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.payment_slip') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrations as $key => $registration)
                        <tr data-entry-id="{{ $registration->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registration->id ?? '' }}
                            </td>
                            <td>
                                {{ $registration->email ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Registration::TITLE_SELECT[$registration->title] ?? '' }}
                            </td>
                            <td>
                                {{ $registration->full_name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Registration::GENDER_SELECT[$registration->gender] ?? '' }}
                            </td>
                            <td>
                                {{ $registration->institution ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Registration::PROFESSION_SELECT[$registration->profession] ?? '' }}
                            </td>
                            <td>
                                {{ $registration->current_position ?? '' }}
                            </td>
                            <td>
                                {{ $registration->faculty ?? '' }}
                            </td>
                            <td>
                                {{ $registration->department ?? '' }}
                            </td>
                            <td>
                                {{ $registration->research_field ?? '' }}
                            </td>
                            <td>
                                {{ $registration->address ?? '' }}
                            </td>
                            <td>
                                {{ $registration->city ?? '' }}
                            </td>
                            <td>
                                {{ $registration->postal_code ?? '' }}
                            </td>
                            <td>
                                {{ $registration->country ?? '' }}
                            </td>
                            <td>
                                {{ $registration->mobile ?? '' }}
                            </td>
                            <td>
                                @if($registration->payment_slip)
                                    <a href="{{ $registration->payment_slip->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('registration_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.registrations.show', $registration->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('registration_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.registrations.edit', $registration->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('registration_delete')
                                    <form action="{{ route('admin.registrations.destroy', $registration->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('registration_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registrations.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Registration:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection