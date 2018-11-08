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
    Antecedentes Familiares <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.antecedentesfamiliares.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    <th>HTA</th>
                    <th>HTA Parentesco</th>
                    <th>Infarto</th>
                    <th>Infarto Parentesco</th>
                    <th>ACV</th>
                    <th>ACV Parentesco</th>
                    <th>Diabetes</th>
                    <th>Diabetes Parentesco</th>
                    <th>Asma</th>
                    <th>Asma Parentesco</th>
                    <th>Artritis</th>
                    <th>Artritis Parentesco</th>
                    <th>Cancer</th>
                    <th>Cancer Parentesco</th>
                    <th>Enfermedad Mental</th>
                    <th>Enfermedad Mental Parentesco</th>
                    <th>Epilepsia</th>
                    <th>Epilepsia Parentesco</th>
                    <th>Alergias</th>
                    <th>Alergias Parentesco</th>
                    <th>otros</th>
              <th>ciclo</th>      
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
                      <td><a>{{ $item->HTA }}</a></td>
                      <td><a>{{ $item->HTAparentesco }}</a></td>
                      <td><a>{{ $item->Infarto }}</a></td>
                      <td><a>{{ $item->Infartoparentesco }}</a></td>
                      <td><a>{{ $item->ACV }}</a></td>
                      <td><a>{{ $item->ACVparentesco }}</a></td>
                      <td><a>{{ $item->Diabetes }}</a></td>
                      <td><a>{{ $item->Diabetesparentesco }}</a></td>
                      <td><a>{{ $item->Asma }}</a></td>
                      <td><a>{{ $item->Asmaparentesco }}</a></td>
                      <td><a>{{ $item->Artritis }}</a></td>
                      <td><a>{{ $item->Artritisparentesco }}</a></td>
                      <td><a>{{ $item->Cancer }}</a></td>
                      <td><a>{{ $item->Cancerparentesco }}</a></td>
                      <td><a>{{ $item->Enf_Mental }}</a></td>
                      <td><a>{{ $item->Enf_Mentalparentesco }}</a></td>
                      <td><a>{{ $item->Epilepsia }}</a></td>
                      <td><a>{{ $item->EpilepsiaMentalparentesco }}</a></td>
                      <td><a>{{ $item->Alergias }}</a></td>
                      <td><a>{{ $item->AlergiasMentalparentesco }}</a></td>
                      <td><a>{{ $item->otros }}</a></td>
                        <!-- <td>
                        @if ($item->parent)
                        	{{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.antecedentesfamiliares.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.antecedentesfamiliares.destroy', $item->id),
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
