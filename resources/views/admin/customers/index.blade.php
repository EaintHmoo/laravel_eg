@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="custom-header">
        {{ trans('cruds.customer.title_singular') }} {{ trans('global.list') }}
        @can('customer_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.customers.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.customer.title_singular') }}
                </a>
            </div>
        </div>
        @endcan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Customer">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.customer.fields.attention_person') }}
                        </th>
                        <th>
                            {{ trans('cruds.customer.fields.factory_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.customer.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.customer.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.customer.fields.email') }}
                        </th>
                        <th>
                            {{trans('cruds.customer.fields.branch')}}
                        </th>
                        <th>
                            {{trans('global.action')}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $key => $customer)
                    <tr data-entry-id="{{ $customer->id }}">
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $customer->attention_person ?? '' }}
                        </td>
                        <td>
                            {{ $customer->factory_name ?? '' }}
                        </td>
                        <td>
                            {{ $customer->address ?? '' }}
                        </td>
                        <td class="text-nowrap">
                            {{ $customer->phone ?? '' }}
                        </td>
                        <td class="text-nowrap">
                            {{ $customer->email ?? '' }}
                        </td>
                        <td>
                            <span class="badge rounded-pill bg-success">
                                {{ App\Models\User::find($customer->created_by_id)->branch->name ?? '' }}
                            </span>
                        </td>
                        <td class="text-nowrap">
                            @can('customer_show')
                            <a class="p-0 glow"
                                style="width: 26px;height: 36px;display: inline-block;line-height: 36px;color:grey;"
                                href="{{ route('admin.customers.show', $customer->id) }}">
                                <i class='bx bx-show'></i>
                            </a>
                            @endcan

                            @can('customer_edit')
                            <a class="p-0 glow"
                                style="width: 26px;height: 36px;display: inline-block;line-height: 36px;color:grey;"
                                href="{{ route('admin.customers.edit', $customer->id) }}">
                                <i class='bx bx-edit'></i>
                            </a>
                            @endcan

                            @can('customer_delete')
                            <form id="orderDelete-{{ $customer->id }}"
                                action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" {{--
                                onsubmit="return confirm('{{ trans('global.areYouSure') }}');" --}}
                                style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden"
                                    style="width: 26px;height: 36px;display: inline-block;line-height: 36px;"
                                    class=" p-0 glow" value="{{ trans('global.delete') }}">
                                <button
                                    style="width: 26px;height: 36px;display: inline-block;line-height: 36px;border:none;color:grey;background:none;"
                                    class=" p-0 glow show_confirm">
                                    {{-- onclick="event.preventDefault(); document.getElementById('orderDelete-{{
                                    $customer->id }}').submit();"> --}}
                                    <i class="bx bx-trash"></i>
                                </button>
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
@can('customer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.customers.massDestroy') }}",
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
    order: [],
    pageLength: 100,
  });
  let table = $('.datatable-Customer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

  //Delete Comfirmation
  $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
          })
        });
})

</script>
@endsection