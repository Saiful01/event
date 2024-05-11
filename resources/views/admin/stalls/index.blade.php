@extends('layouts.admin')
@section('content')
@can('stall_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.stalls.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.stall.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.stall.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Stall">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.stall.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.stall.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.stall.fields.link') }}
                        </th>
                        <th>
                            {{ trans('cruds.stall.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.stall.fields.details') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stalls as $key => $stall)
                        <tr data-entry-id="{{ $stall->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $stall->id ?? '' }}
                            </td>
                            <td>
                                {{ $stall->name ?? '' }}
                            </td>
                            <td>
                                {{ $stall->link ?? '' }}
                            </td>
                            <td>
                                @if($stall->image)
                                    <a href="{{ $stall->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $stall->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $stall->details ?? '' }}
                            </td>
                            <td>
                                @can('stall_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.stalls.show', $stall->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('stall_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.stalls.edit', $stall->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('stall_delete')
                                    <form action="{{ route('admin.stalls.destroy', $stall->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('stall_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.stalls.massDestroy') }}",
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
  let table = $('.datatable-Stall:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection