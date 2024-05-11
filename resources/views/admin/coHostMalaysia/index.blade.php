@extends('layouts.admin')
@section('content')
@can('co_host_malaysium_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.co-host-malaysia.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.coHostMalaysium.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.coHostMalaysium.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CoHostMalaysium">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.link') }}
                        </th>
                        <th>
                            {{ trans('cruds.coHostMalaysium.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coHostMalaysia as $key => $coHostMalaysium)
                        <tr data-entry-id="{{ $coHostMalaysium->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $coHostMalaysium->id ?? '' }}
                            </td>
                            <td>
                                {{ $coHostMalaysium->name ?? '' }}
                            </td>
                            <td>
                                {{ $coHostMalaysium->link ?? '' }}
                            </td>
                            <td>
                                @if($coHostMalaysium->image)
                                    <a href="{{ $coHostMalaysium->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $coHostMalaysium->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('co_host_malaysium_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.co-host-malaysia.show', $coHostMalaysium->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('co_host_malaysium_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.co-host-malaysia.edit', $coHostMalaysium->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('co_host_malaysium_delete')
                                    <form action="{{ route('admin.co-host-malaysia.destroy', $coHostMalaysium->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('co_host_malaysium_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.co-host-malaysia.massDestroy') }}",
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
  let table = $('.datatable-CoHostMalaysium:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection