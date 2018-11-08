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
    Antecedentes GINEOBSTETRICOS <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="border:1px solid #d2d6de;" >

        <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.antecedentesginecoostetricos.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
        </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding"  >
          <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    <th>menarca</th>
                    <th>ciclo</th>
                    <th>FUM</th>
                    <th>dismenorrea</th>
                    <th>enfermendaddemama</th>
                    <th>enfermedadmamacual</th>
                    <th>fechaultimacitolo</th>
                    <th>resultadocitolo</th>
                    <th>FUP</th>
                    <th>G</th>
                    <th>P</th>
                    <th>A</th>
                    <th>Mortinatos</th>
                    <th>C</th>
                    <th>Gemelares</th>
                    <th>ECT</th>
                    <th>V</th>
                    <th>Planifica</th>
                    <th>MetodoACO</th>
                    <th>DIU</th>
                    <th>Quirurjicos</th>
                    <th>tiempoplanificacionanos</th>
                    <th>tiempoplanificacionmeses</th>
                    <th>Otros</th>
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
                      <td><a>{{ $item->menarca }}</a></td>
                      <td><a>{{ $item->FUM }}</a></td>
                      <td><a>{{ $item->dismenorrea }}</a></td>
                      <td><a>{{ $item->enfermendaddemama }}</a></td>
                      <td><a>{{ $item->enfermedadmamacual }}</a></td>
                      <td><a>{{ $item->fechaultimacitolo }}</a></td>
                      <td><a>{{ $item->FUP }}</a></td>
                      <td><a>{{ $item->G }}</a></td>
                      <td><a>{{ $item->P }}</a></td>
                      <td><a>{{ $item->A }}</a></td>
                      <td><a>{{ $item->Mortinatos }}</a></td>
                      <td><a>{{ $item->C }}</a></td>
                      <td><a>{{ $item->Gemelares }}</a></td>
                      <td><a>{{ $item->ECT }}</a></td>
                      <td><a>{{ $item->V }}</a></td>
                      <td><a>{{ $item->Planifica }}</a></td>
                      <td><a>{{ $item->MetodoACO }}</a></td>
                      <td><a>{{ $item->DIU }}</a></td>
                      <td><a>{{ $item->Quirurjicos }}</a></td>
                      <td><a>{{ $item->tiempoplanificacionanos }}</a></td>
                      <td><a>{{ $item->tiempoplanificacionmeses }}</a></td>
                      <td><a>{{ $item->Otros }}</a></td>
                        <!-- <td>
                        @if ($item->parent)
                          {{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.antecedentesginecoostetricos.edit', $item->idcita) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.antecedentesginecoostetricos.destroy', $item->idcita),
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
