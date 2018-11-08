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
    REVISIÓN DE SISTEMAS <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.antecerevisionsistemas.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    <th>sentidos</th>
                    <th>sentidosDescripcion</th>
                    <th>respiratorio</th>
                    <th>respiratorioDescripcion</th>
                    <th>cardiovascular</th>
                    <th>cardiovascularDescripcion</th>
                    <th>gastrointestinal</th>
                    <th>gastrointestinalDescrip</th>
                    <th>geniurinario</th>
                    <th>geniurinarioDescrip</th>
                    <th>osteomuscular</th>
                    <th>osteomuscularDescrip</th>
                    <th>endocrino</th>
                    <th>endocrinoDescrip</th>
                    <th>Piel</th>
                    <th>PielDescrip</th>
                    <th>observaciones</th>
                  

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
                      <td><a>{{ $item->sentidos }}</a></td>
                      <td><a>{{ $item->sentidosDescripcion }}</a></td>
                      <td><a>{{ $item->respiratorio }}</a></td>
                      <td><a>{{ $item->respiratorioDescripcion }}</a></td>
                      <td><a>{{ $item->cardiovascular }}</a></td>
                      <td><a>{{ $item->cardiovascularDescripcion }}</a></td>
                      <td><a>{{ $item->gastrointestinal }}</a></td>
                      <td><a>{{ $item->gastrointestinalDescrip }}</a></td>
                      <td><a>{{ $item->geniurinario }}</a></td>
                      <td><a>{{ $item->geniurinarioDescrip }}</a></td>
                      <td><a>{{ $item->osteomuscular }}</a></td>
                      <td><a>{{ $item->osteomuscularDescrip }}</a></td>
                      <td><a>{{ $item->endocrino }}</a></td>
                      <td><a>{{ $item->endocrinoDescrip }}</a></td>
                      <td><a>{{ $item->Piel }}</a></td>
                      <td><a>{{ $item->PielDescrip }}</a></td>
                      <td><a>{{ $item->observaciones }}</a></td>
                                           

                        <!-- <td>
                        @if ($item->parent)
                        	{{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.antecerevisionsistemas.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.antecerevisionsistemas.destroy', $item->id),
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
