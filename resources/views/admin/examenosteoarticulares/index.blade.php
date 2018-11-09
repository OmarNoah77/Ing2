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
                      <td><a>{{ $item->dedosmano_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->dedosmano_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->dedospies_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->dedospies_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->munecas_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->munecas_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->codos_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->codos_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->nombros_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->nombros_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->rodillas_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->rodillas_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->cadera_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->cadera_I_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->tobillos_D_DEFORMIDAD }}</a></td>
                      <td><a>{{ $item->tobillos_I_DEFORMIDAD }}</a></td>


                      <td><a>{{ $item->dedosmano_D_RUBOR }}</a></td>
                      <td><a>{{ $item->dedosmano_I_RUBOR }}</a></td>
                      <td><a>{{ $item->dedospies_D_RUBOR }}</a></td>
                      <td><a>{{ $item->dedospies_I_RUBOR }}</a></td>
                      <td><a>{{ $item->munecas_D_RUBOR }}</a></td>
                      <td><a>{{ $item->munecas_I_RUBOR }}</a></td>
                      <td><a>{{ $item->codos_D_RUBOR }}</a></td>
                      <td><a>{{ $item->codos_I_RUBOR }}</a></td>
                      <td><a>{{ $item->nombros_D_RUBOR }}</a></td>
                      <td><a>{{ $item->nombros_I_RUBOR }}</a></td>
                      <td><a>{{ $item->rodillas_D_RUBOR }}</a></td>
                      <td><a>{{ $item->rodillas_I_RUBOR }}</a></td>
                      <td><a>{{ $item->cadera_D_RUBOR }}</a></td>
                      <td><a>{{ $item->cadera_I_RUBOR }}</a></td>
                      <td><a>{{ $item->tobillos_D_RUBOR }}</a></td>
                      <td><a>{{ $item->tobillos_I_RUBOR }}</a></td>


                      <td><a>{{ $item->dedosmano_D_COLOR }}</a></td>
                      <td><a>{{ $item->dedosmano_I_COLOR }}</a></td>
                      <td><a>{{ $item->dedospies_D_COLOR }}</a></td>
                      <td><a>{{ $item->dedospies_I_COLOR }}</a></td>
                      <td><a>{{ $item->munecas_D_COLOR }}</a></td>
                      <td><a>{{ $item->munecas_I_COLOR }}</a></td>
                      <td><a>{{ $item->codos_D_COLOR }}</a></td>
                      <td><a>{{ $item->codos_I_COLOR }}</a></td>
                      <td><a>{{ $item->nombros_D_COLOR }}</a></td>
                      <td><a>{{ $item->nombros_I_COLOR }}</a></td>
                      <td><a>{{ $item->rodillas_D_COLOR }}</a></td>
                      <td><a>{{ $item->rodillas_I_COLOR }}</a></td>
                      <td><a>{{ $item->cadera_D_COLOR }}</a></td>
                      <td><a>{{ $item->cadera_I_COLOR }}</a></td>
                      <td><a>{{ $item->tobillos_D_COLOR }}</a></td>
                      <td><a>{{ $item->tobillos_I_COLOR }}</a></td>


                      <td><a>{{ $item->dedosmano_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->dedosmano_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->dedospies_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->dedospies_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->munecas_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->munecas_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->codos_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->codos_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->nombros_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->nombros_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->rodillas_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->rodillas_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->cadera_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->cadera_I_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->tobillos_D_SENSIBILIDAD }}</a></td>
                      <td><a>{{ $item->tobillos_I_SENSIBILIDAD }}</a></td>


                      <td><a>{{ $item->dedosmano_D_EDEMA }}</a></td>
                      <td><a>{{ $item->dedosmano_I_EDEMA }}</a></td>
                      <td><a>{{ $item->dedospies_D_EDEMA }}</a></td>
                      <td><a>{{ $item->dedospies_I_EDEMA }}</a></td>
                      <td><a>{{ $item->munecas_D_EDEMA }}</a></td>
                      <td><a>{{ $item->munecas_I_EDEMA }}</a></td>
                      <td><a>{{ $item->codos_D_EDEMA }}</a></td>
                      <td><a>{{ $item->codos_I_EDEMA }}</a></td>
                      <td><a>{{ $item->nombros_D_EDEMA }}</a></td>
                      <td><a>{{ $item->nombros_I_EDEMA }}</a></td>
                      <td><a>{{ $item->rodillas_D_EDEMA }}</a></td>
                      <td><a>{{ $item->rodillas_I_EDEMA }}</a></td>
                      <td><a>{{ $item->cadera_D_EDEMA }}</a></td>
                      <td><a>{{ $item->cadera_I_EDEMA }}</a></td>
                      <td><a>{{ $item->tobillos_D_EDEMA }}</a></td>
                      <td><a>{{ $item->tobillos_I_EDEMA }}</a></td>


                      <td><a>{{ $item->dedosmano_D_DOLOR }}</a></td>
                      <td><a>{{ $item->dedosmano_I_DOLOR }}</a></td>
                      <td><a>{{ $item->dedospies_D_DOLOR }}</a></td>
                      <td><a>{{ $item->dedospies_I_DOLOR }}</a></td>
                      <td><a>{{ $item->munecas_D_DOLOR }}</a></td>
                      <td><a>{{ $item->munecas_I_DOLOR }}</a></td>
                      <td><a>{{ $item->codos_D_DOLOR }}</a></td>
                      <td><a>{{ $item->codos_I_DOLOR }}</a></td>
                      <td><a>{{ $item->nombros_D_DOLOR }}</a></td>
                      <td><a>{{ $item->nombros_I_DOLOR }}</a></td>
                      <td><a>{{ $item->rodillas_D_DOLOR }}</a></td>
                      <td><a>{{ $item->rodillas_I_DOLOR }}</a></td>
                      <td><a>{{ $item->cadera_D_DOLOR }}</a></td>
                      <td><a>{{ $item->cadera_I_DOLOR }}</a></td>
                      <td><a>{{ $item->tobillos_D_DOLOR }}</a></td>
                      <td><a>{{ $item->tobillos_I_DOLOR }}</a></td>


                      <td><a>{{ $item->dedosmano_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->dedosmano_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->dedospies_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->dedospies_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->munecas_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->munecas_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->codos_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->codos_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->nombros_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->nombros_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->rodillas_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->rodillas_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->cadera_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->cadera_I_LIMITACION }}</a></td>
                      <td><a>{{ $item->tobillos_D_LIMITACION }}</a></td>
                      <td><a>{{ $item->tobillos_I_LIMITACION }}</a></td>


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
