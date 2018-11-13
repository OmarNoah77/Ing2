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
    Admisiones <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.admisiones.create') }}"  title="Add Item">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Tipo doc entidad</th>
                    <th>Numero doc entidad</th>
                    <th>Tipo doc cliente</th>
                    <th>Numero doc cliente</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Primer nombre</th>
                    <th>Segundo nombre</th>
                    <th>Fecha cita</th>
                    <th>Hora cita</th>
                    <th>Tipo Servicio</th>
                    <th>Examen</th>
                    <th>Enfasis</th>
                    <th>Profesional</th>
                    <th>Fecha Admision</th>
                    <th>Estado proceso</th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="actions"></th>
                </tr>
            </tfoot>
            <tbody>
      					@foreach ($items as $item)
      						<tr>
                      <td><a>{{ $item->tipo_documentoentidad }}</a></td>
                      <td><a>{{ $item->numerodocumentoentidad }}</a></td>
                      <td><a>{{ $item->tipodocumentocliente }}</a></td>
                      <td><a>{{ $item->numerodocumentocleinte }}</a></td>
                      <td><a>{{ $item->primerapellido }}</a></td>
                      <td><a>{{ $item->segundoapellido }}</a></td>
                      <td><a>{{ $item->primernombre }}</a></td>
                      <td><a>{{ $item->segundonombre }}</a></td>
                      <td><a>{{ $item->Fechacita }}</a></td>
                      <td><a>{{ $item->Horacita }}</a></td>
                      <td><a>{{ $item->tiposervicio }}</a></td>
                      <td><a>{{ $item->examen }}</a></td>
                      <td><a>{{ $item->enfasis }}</a></td>
                      <td><a>{{ $item->profesional }}</a></td>
                      <td><a>{{ $item->fechaadmision }}</a></td>
                      <td><a>{{ $item->estadoproceso }}</a></td>                      
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.admisiones.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.admisiones.destroy', $item->id),
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
