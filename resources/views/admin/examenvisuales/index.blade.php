@extends('admin.adminlayout')

@section('css')
  <style>
  table.table .actions {
      width: 100px;
      text-align: center;
  }
  </style>
@stop

@section('page-header')
    Examen Visual <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.examenvisuales.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    
                    <th>usagafas</th>
                    <th>usalentes</th>
                    
                    <th>ultimaconsulta </th>
                    
                    <th>O_D_cerca</th>
                    <th>O_D_lejos</th>
                    <th>O_D_correccion</th>

                    <th>O_I_cerca</th>
                    <th>O_I_lejos</th>
                    <th>O_I_correccion</th>

                    <th>A_o_cerca</th>
                    <th>A_o_lejos</th>
                    <th>A_O_correccion</th>
                    <th>onservacion</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th class="actions"></th>
                </tr>
            </tfoot>
            <tbody>
      					@foreach ($items as $item)
      						<tr>
                      <td><a>{{ $item->idcita }}</a></td>
                      <td><a>{{ $item->usagafas }}</a></td>
                      <td><a>{{ $item->usalentes }}</a></td>
                      <td><a>{{ $item->ultimaconsulta }}</a></td>

                      <td><a>{{ $item->O_D_cerca }}</a></td>
                      <td><a>{{ $item->O_D_lejos }}</a></td>
                      <td><a>{{ $item->O_D_correccion }}</a></td>

                      <td><a>{{ $item->O_I_cerca }}</a></td>
                      <td><a>{{ $item->O_I_lejos }}</a></td>
                      <td><a>{{ $item->O_I_correccion }}</a></td>

                      <td><a>{{ $item->A_o_cerca }}</a></td>
                      <td><a>{{ $item->A_o_lejos }}</a></td>
                      <td><a>{{ $item->A_O_correccion }}</a></td>
                      <td><a>{{ $item->onservacion }}</a></td>

                        <!-- <td>
                        @if ($item->parent)
                        	{{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.examenvisuales.edit', $item->idcita) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.examenvisuales.destroy', $item->idcita),
                                        'method' => 'DELETE',
                                        ])
                                    !!}
                                    <button class="btn btn-danger btn-xs" title="{{ trans('app.delete_title') }}"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
      						</tr>
      					@endforeach
            </tbody>
          </table>
	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	</div>
@stop

@section('js')
  <script>

    (function($) {

      var table = $('.data-tables').DataTable({
          "columnDefs": [{
                 "targets": 'no-sort',
                 "orderable": false,
           }],
      });

    })(jQuery);
  </script>
@stop
