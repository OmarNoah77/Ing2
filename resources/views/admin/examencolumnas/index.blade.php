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
    Examen Columnas <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.examencolumnas.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    
                    <th>Inspección Simetria</th>
                    <th>Inspección Simetria Observación</th>
                    
                    <th>Inspección Curvaturas </th>
                    <th>Inspección Curvaturas Observación</th>
                    
                    <th>Palpación Dolor </th>
                    <th>Palpación Dolor Observación</th>

                    <th>Palpación Espasmos</th>
                    <th>Palpación Espasmos Observación</th>

                    <th>Movilidad Flexion</th>
                    <th>Movilidad Flexiónn Observa</th>

                    <th>Movilidad Extensión</th>
                    <th>movilidad Extensión Observación</th>

                    <th>Movilidad Flexión Lateral</th>
                    <th>Movilidad Flexión Lateral Observación</th>

                    <th>Movilidad Rotación/th>
                    <th>Movilidad Rotación Observación</th>

                    <th>Marcha Puntas</th>  
                    <th>Marcha Puntas Observación</th>  

                    <th>Marcha Talones</th> 
                    <th>Marcha Talones Observa</th>  

                    <th>Reflejos Patelar</th>  
                    <th>Reflejos Patelar Observación</th>  

                    <th>Reflejos Aquiliano</th>  
                    <th>Reflejos Aquiliano Observación</th>  

                    <th>Reflejos Trofismo</th> 
                    <th>Reflejos Trofismo Observación</th> 

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
                      <td><a>{{ $item->inspeccionsimetria }}</a></td>
                      <td><a>{{ $item->inspeccionsimetriaobserva }}</a></td>

                      <td><a>{{ $item->inspeccioncurvaturas }}</a></td>
                      <td><a>{{ $item->inspeccioncurvaturasobserva }}</a></td>

                      <td><a>{{ $item->palpaciondolor }}</a></td>
                      <td><a>{{ $item->palpaciondolorobserva }}</a></td>

                      <td><a>{{ $item->palpacionespasmos }}</a></td>
                      <td><a>{{ $item->palpacionespasmosobserva }}</a></td>

                      <td><a>{{ $item->movilidadflexion }}</a></td>
                      <td><a>{{ $item->movilidadflexionobserva }}</a></td>

                      <td><a>{{ $item->movilidadextension }}</a></td>
                      <td><a>{{ $item->movilidadextensionobserva }}</a></td>

                      <td><a>{{ $item->movilidadflexionlateral }}</a></td>
                      <td><a>{{ $item->movilidadflexionlateralobserva }}</a></td>

                      <td><a>{{ $item->movilidadrotacion }}</a></td>
                      <td><a>{{ $item->movilidadrotacionobserva }}</a></td>

                      <td><a>{{ $item->marchapuntas }}</a></td>
                      <td><a>{{ $item->marchapuntasobserva }}</a></td>

                      <td><a>{{ $item->marchatalones }}</a></td>
                      <td><a>{{ $item->marchatalonesobserva }}</a></td>

                      <td><a>{{ $item->reflejospatelar }}</a></td>
                      <td><a>{{ $item->reflejospatelarobserva }}</a></td>

                      <td><a>{{ $item->reflejosaquiliano }}</a></td>
                      <td><a>{{ $item->reflejosaquilianoobserva }}</a></td>

                      <td><a>{{ $item->reflejostrofismo }}</a></td>
                      <td><a>{{ $item->reflejostrofismoobserva }}</a></td>




                


                        <!-- <td>
                        @if ($item->parent)
                        	{{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.examencolumnas.edit', $item->idcita) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.examencolumnas.destroy', $item->idcita),
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
