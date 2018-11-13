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
    Historia Concepto Ingreso/Retiro <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.hist_concepto_ing_rets.create') }}"  title="Add Item">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="60%" bordercolor="#000000"  backcolor="#0000FF">
            <thead>
                <tr  backcolor="#0000FF">
                     <th backcolor="#0000FF">Codigo Cita</th>                 
                    <th>apto</th> 
                    <th>aptoobservacion</th> 
                    <th>aptorestriccion</th> 
                    <th>aptorestriccionobservacion</th> 
                    <th>aptorestriccionnormal</th> 
                    <th>aptorestriccionnormalobservacion</th> 
                    <th>aplazado</th> 
                    <th>aplazadoobservacion</th> 
                    <th>Noapto</th> 
                    <th>Requiereubicacion</th> 
                    <th>restricciones</th> 

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
                      <td><a>{{ $item->apto }}</a></td>
                      <td><a>{{ $item->aptoobservacion }}</a></td>
                      <td><a>{{ $item->aptorestriccion }}</a></td>
                      <td><a>{{ $item->aptorestriccionobservacion }}</a></td>
                      <td><a>{{ $item->aptorestriccionnormal }}</a></td>
                      <td><a>{{ $item->aptorestriccionnormalobservacion }}</a></td>
                      <td><a>{{ $item->aplazado }}</a></td>
                      <td><a>{{ $item->aplazadoobservacion }}</a></td>
                      <td><a>{{ $item->Noapto }}</a></td>
                      <td><a>{{ $item->Requiereubicacion }}</a></td>
                      <td><a>{{ $item->restricciones }}</a></td>
                        <!-- <td>
                        @if ($item->parent)
                        	{{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.hist_diagnosticos.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.hist_diagnosticos.destroy', $item->id),
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
