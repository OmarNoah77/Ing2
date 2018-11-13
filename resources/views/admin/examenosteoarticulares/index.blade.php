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
    Examen Osteoarticulares <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.examenosteoarticulares.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    <th>DEFORMIDAD dedos mano D</th>
                    <th>DEFORMIDAD dedos mano I</th>
                    <th>DEFORMIDAD dedos pies D </th>
                    <th>DEFORMIDAD dedos pies I</th>
                    <th>DEFORMIDAD muñecas D</th>
                    <th>DEFORMIDAD munecas I</th>
                    <th>DEFORMIDAD codos D</th>
                    <th>DEFORMIDAD codos I</th>
                    <th>DEFORMIDAD hombros D</th>
                    <th>DEFORMIDAD hombros I</th>
                    <th>DEFORMIDAD rodillas D</th>
                    <th>DEFORMIDAD rodillas I</th>
                    <th>DEFORMIDAD cadera D</th>
                    <th>DEFORMIDAD cadera I</th>
                    <th>DEFORMIDAD tobillos D</th>
                    <th>DEFORMIDAD tobillos I</th>   

                    <th>RUBOR dedos mano D</th>
                    <th>RUBOR dedos mano I</th>
                    <th>RUBOR dedos pies D</th>
                    <th>RUBOR dedos pies I</th>
                    <th>RUBOR muñecas D</th>
                    <th>RUBOR muñecas I</th>
                    <th>RUBOR codos D</th>
                    <th>RUBOR codos I</th>
                    <th>RUBOR nombros D</th>
                    <th>RUBOR nombros I</th>
                    <th>RUBOR rodillas D</th>
                    <th>RUBOR rodillas I</th>
                    <th>RUBOR cadera D</th>
                    <th>RUBOR cadera I</th>
                    <th>RUBOR tobillos D</th>
                    <th>RUBOR tobillos I</th>  

                    <th>COLOR dedos mano D</th>
                    <th>COLOR dedos mano I</th>
                    <th>COLOR dedos pies D</th>
                    <th>COLOR dedos pies I</th>
                    <th>COLOR munecas D</th>
                    <th>COLOR munecas I</th>
                    <th>COLOR codos D</th>
                    <th>COLOR codos I</th>
                    <th>COLOR hombros D</th>
                    <th>COLOR hombros I</th>
                    <th>COLOR rodillas D</th>
                    <th>COLOR rodillas I</th>
                    <th>COLOR cadera D</th>
                    <th>COLOR cadera I</th>
                    <th>COLOR tobillos D</th>
                    <th>COLOR tobillos I</th>   



                    <th>SENSIBILIDAD dedos mano D</th>
                    <th>SENSIBILIDAD dedos mano I</th>
                    <th>SENSIBILIDAD dedos pies D</th>
                    <th>SENSIBILIDAD dedos pies I</th>
                    <th>SENSIBILIDAD munecas D</th>
                    <th>SENSIBILIDAD munecas I</th>
                    <th>SENSIBILIDAD codos D</th>
                    <th>SENSIBILIDAD codos I</th>
                    <th>SENSIBILIDAD hombros D</th>
                    <th>SENSIBILIDAD hombros I</th>
                    <th>SENSIBILIDAD rodillas D</th>
                    <th>SENSIBILIDAD rodillas I</th>
                    <th>SENSIBILIDAD cadera D</th>
                    <th>SENSIBILIDAD cadera I</th>
                    <th>SENSIBILIDAD tobillos D</th>
                    <th>SENSIBILIDAD tobillos I</th>   
                  

                    <th>EDEMA dedos mano D</th>
                    <th>EDEMA dedos mano I</th>
                    <th>EDEMA dedos pies D</th>
                    <th>EDEMA dedos pies I</th>
                    <th>EDEMA munecas D</th>
                    <th>EDEMA munecas I</th>
                    <th>EDEMA codos D</th>
                    <th>EDEMA codos I</th>
                    <th>EDEMA hombros D</th>
                    <th>EDEMA hombros I</th>
                    <th>EDEMA rodillas D</th>
                    <th>EDEMA rodillas I</th>
                    <th>EDEMA cadera D</th>
                    <th>EDEMA cadera I</th>
                    <th>EDEMA tobillos D</th>
                    <th>EDEMA tobillos I</th> 

                    <th>DOLOR dedos mano D</th>
                    <th>DOLOR dedos mano I</th>
                    <th>DOLOR dedos pies D</th>
                    <th>DOLOR dedos pies I</th>
                    <th>DOLOR muñecas D</th>
                    <th>DOLOR muñecas I</th>
                    <th>DOLOR codos D</th>
                    <th>DOLOR codos I</th>
                    <th>DOLOR hombros D</th>
                    <th>DOLOR hombros I</th>
                    <th>DOLOR rodillas D</th>
                    <th>DOLOR rodillas I</th>
                    <th>DOLOR cadera D</th>
                    <th>DOLOR cadera I</th>
                    <th>DOLOR tobillos D</th>
                    <th>DOLOR tobillos I</th> 


                    <th>LIMITACION dedos mano D</th>
                    <th>LIMITACION dedos mano I</th>
                    <th>LIMITACION dedos pies D</th>
                    <th>LIMITACION dedos pies I</th>
                    <th>LIMITACION muñecas D</th>
                    <th>LIMITACION muñecas I</th>
                    <th>LIMITACION codos D</th>
                    <th>LIMITACION codos I</th>
                    <th>LIMITACION hombros D</th>
                    <th>LIMITACION hombros I</th>
                    <th>LIMITACION rodillas D</th>
                    <th>LIMITACION rodillas I</th>
                    <th>LIMITACION cadera D</th>
                    <th>LIMITACION cadera I</th>
                    <th>LIMITACION tobillos D</th>
                    <th>LIMITACION tobillos I</th>  
                    <th>funcion_motora_espontanea</th>  
                    <th>funcion_motora_conservada</th>  
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
                      <td><a>{{ $item->dedosmano_d_deformidad }}</a></td>
                      <td><a>{{ $item->dedosmano_i_deformidad }}</a></td>
                      <td><a>{{ $item->dedospies_d_deformidad }}</a></td>
                      <td><a>{{ $item->dedospies_i_deformidad }}</a></td>
                      <td><a>{{ $item->munecas_d_deformidad }}</a></td>
                      <td><a>{{ $item->munecas_i_deformidad }}</a></td>
                      <td><a>{{ $item->codos_d_deformidad }}</a></td>
                      <td><a>{{ $item->codos_i_deformidad }}</a></td>
                      <td><a>{{ $item->nombros_d_deformidad }}</a></td>
                      <td><a>{{ $item->nombros_i_deformidad }}</a></td>
                      <td><a>{{ $item->rodillas_d_deformidad }}</a></td>
                      <td><a>{{ $item->rodillas_i_deformidad }}</a></td>
                      <td><a>{{ $item->cadera_d_deformidad }}</a></td>
                      <td><a>{{ $item->cadera_i_deformidad }}</a></td>
                      <td><a>{{ $item->tobillos_d_deformidad }}</a></td>
                      <td><a>{{ $item->tobillos_i_deformidad }}</a></td>


                      <td><a>{{ $item->dedosmano_d_rubor }}</a></td>
                      <td><a>{{ $item->dedosmano_i_rubor }}</a></td>
                      <td><a>{{ $item->dedospies_d_rubor }}</a></td>
                      <td><a>{{ $item->dedospies_i_rubor }}</a></td>
                      <td><a>{{ $item->munecas_d_rubor }}</a></td>
                      <td><a>{{ $item->munecas_i_rubor }}</a></td>
                      <td><a>{{ $item->codos_d_rubor }}</a></td>
                      <td><a>{{ $item->codos_i_rubor }}</a></td>
                      <td><a>{{ $item->nombros_d_rubor }}</a></td>
                      <td><a>{{ $item->nombros_i_rubor }}</a></td>
                      <td><a>{{ $item->rodillas_d_rubor }}</a></td>
                      <td><a>{{ $item->rodillas_i_rubor }}</a></td>
                      <td><a>{{ $item->cadera_d_rubor }}</a></td>
                      <td><a>{{ $item->cadera_i_rubor }}</a></td>
                      <td><a>{{ $item->tobillos_d_rubor }}</a></td>
                      <td><a>{{ $item->tobillos_i_rubor }}</a></td>


                      <td><a>{{ $item->dedosmano_d_color }}</a></td>
                      <td><a>{{ $item->dedosmano_i_color }}</a></td>
                      <td><a>{{ $item->dedospies_d_color }}</a></td>
                      <td><a>{{ $item->dedospies_i_color }}</a></td>
                      <td><a>{{ $item->munecas_d_color }}</a></td>
                      <td><a>{{ $item->munecas_i_color }}</a></td>
                      <td><a>{{ $item->codos_d_color }}</a></td>
                      <td><a>{{ $item->codos_i_color }}</a></td>
                      <td><a>{{ $item->nombros_d_color }}</a></td>
                      <td><a>{{ $item->nombros_i_color }}</a></td>
                      <td><a>{{ $item->rodillas_d_color }}</a></td>
                      <td><a>{{ $item->rodillas_i_color }}</a></td>
                      <td><a>{{ $item->cadera_d_color }}</a></td>
                      <td><a>{{ $item->cadera_i_color }}</a></td>
                      <td><a>{{ $item->tobillos_d_color }}</a></td>
                      <td><a>{{ $item->tobillos_i_color }}</a></td>


                      <td><a>{{ $item->dedosmano_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->dedosmano_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->dedospies_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->dedospies_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->munecas_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->munecas_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->codos_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->codos_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->nombros_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->nombros_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->rodillas_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->rodillas_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->cadera_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->cadera_i_sensibilidad }}</a></td>
                      <td><a>{{ $item->tobillos_d_sensibilidad }}</a></td>
                      <td><a>{{ $item->tobillos_i_sensibilidad }}</a></td>


                      <td><a>{{ $item->dedosmano_d_edema }}</a></td>
                      <td><a>{{ $item->dedosmano_i_edema }}</a></td>
                      <td><a>{{ $item->dedospies_d_edema }}</a></td>
                      <td><a>{{ $item->dedospies_i_edema }}</a></td>
                      <td><a>{{ $item->munecas_d_edema }}</a></td>
                      <td><a>{{ $item->munecas_i_edema }}</a></td>
                      <td><a>{{ $item->codos_d_edema }}</a></td>
                      <td><a>{{ $item->codos_i_edema }}</a></td>
                      <td><a>{{ $item->nombros_d_edema }}</a></td>
                      <td><a>{{ $item->nombros_i_edema }}</a></td>
                      <td><a>{{ $item->rodillas_d_edema }}</a></td>
                      <td><a>{{ $item->rodillas_i_edema }}</a></td>
                      <td><a>{{ $item->cadera_d_edema }}</a></td>
                      <td><a>{{ $item->cadera_i_edema }}</a></td>
                      <td><a>{{ $item->tobillos_d_edema }}</a></td>
                      <td><a>{{ $item->tobillos_i_edema }}</a></td>


                      <td><a>{{ $item->dedosmano_d_dolor }}</a></td>
                      <td><a>{{ $item->dedosmano_i_dolor }}</a></td>
                      <td><a>{{ $item->dedospies_d_dolor }}</a></td>
                      <td><a>{{ $item->dedospies_i_dolor }}</a></td>
                      <td><a>{{ $item->munecas_d_dolor }}</a></td>
                      <td><a>{{ $item->munecas_i_dolor }}</a></td>
                      <td><a>{{ $item->codos_d_dolor }}</a></td>
                      <td><a>{{ $item->codos_i_dolor }}</a></td>
                      <td><a>{{ $item->nombros_d_dolor }}</a></td>
                      <td><a>{{ $item->nombros_i_dolor }}</a></td>
                      <td><a>{{ $item->rodillas_d_dolor }}</a></td>
                      <td><a>{{ $item->rodillas_i_dolor }}</a></td>
                      <td><a>{{ $item->cadera_d_dolor }}</a></td>
                      <td><a>{{ $item->cadera_i_dolor }}</a></td>
                      <td><a>{{ $item->tobillos_d_dolor }}</a></td>
                      <td><a>{{ $item->tobillos_i_dolor }}</a></td>


                      <td><a>{{ $item->dedosmano_d_limitacion }}</a></td>
                      <td><a>{{ $item->dedosmano_i_limitacion }}</a></td>
                      <td><a>{{ $item->dedospies_d_limitacion }}</a></td>
                      <td><a>{{ $item->dedospies_i_limitacion }}</a></td>
                      <td><a>{{ $item->munecas_d_limitacion }}</a></td>
                      <td><a>{{ $item->munecas_i_limitacion }}</a></td>
                      <td><a>{{ $item->codos_d_limitacion }}</a></td>
                      <td><a>{{ $item->codos_i_limitacion }}</a></td>
                      <td><a>{{ $item->nombros_d_limitacion }}</a></td>
                      <td><a>{{ $item->nombros_i_limitacion }}</a></td>
                      <td><a>{{ $item->rodillas_d_limitacion }}</a></td>
                      <td><a>{{ $item->rodillas_i_limitacion }}</a></td>
                      <td><a>{{ $item->cadera_d_limitacion }}</a></td>
                      <td><a>{{ $item->cadera_i_limitacion }}</a></td>
                      <td><a>{{ $item->tobillos_d_limitacion }}</a></td>
                      <td><a>{{ $item->tobillos_i_limitacion }}</a></td>
                      <td><a>{{ $item->funcion_motora_espontanea }}</a></td>
                      <td><a>{{ $item->funcion_motora_conservada }}</a></td>
                      <td><a>{{ $item->observaciones }}</a></td>

                      


                        <!-- <td>
                        @if ($item->parent)
                        	{{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.examenosteoarticulares.edit', $item->idcita) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.examenosteoarticulares.destroy', $item->idcita),
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
