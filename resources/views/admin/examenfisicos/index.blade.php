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
    examen fisicos <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="border:1px solid #d2d6de;" >

        <div class="box-header" style="background-color:#888888;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.examenfisicos.create') }}"  title="Agregar">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
        </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding"  >
          <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo Cita</th>
                    <th>Peso</th>
                    <th>presionarterial</th>
                    <th>pulso</th>
                    <th>temperatura</th>
                    <th>talla</th>
                    <th>frecuenciarespira</th>
                    <th>dominancia</th>
                    <th>indicemasa</th>
                    <th>diagnospeso</th>
                    <th>diagnospesovalor</th>
                    <th>aspectogeneral</th>
                    <th>aspectogeneraldescrip</th>
                    <th>cicatrices</th>
                    <th>cicatricesdescrip</th>
                    <th>piel</th>
                    <th>pieldescrip</th>
                    <th>craneo</th>
                    <th>creaneodescrip</th>
                    <th>ojosparpados</th>
                    <th>ojosparpadosdescrip</th>
                    <th>ojosconjuntivas</th>
                    <th>ojosconjuntivasdescrip</th>
                    <th>ojoEscleroticas</th>
                    <th>ojosEscleroticasdescrip</th>
                    <th>ojopupilas</th>
                    <th>ojospupilasdescrip</th>
                    <th>ojocorneas</th>
                    <th>ojoscorneasdescrip</th>
                    <th>ojosfondo</th>
                    <th>ojosfondodescrip</th>
                    <th>oidospabellon</th>
                    <th>oidospabellondescrip</th>
                    <th>oidosotoscopia</th>
                    <th>oidosotoscopiadescrip</th>
                    <th>oidosagudeza</th>
                    <th>oidosagudezadescrip</th>
                    <th>naristabique</th>
                    <th>naristabiquedescrip</th>
                    <th>nariscornetes</th>
                    <th>nariscornetesdescrip</th>
                    <th>narismucosas</th>
                    <th>narismucosasdescrip</th>
                    <th>bocalabios</th>
                    <th>bocalabiosdescrip</th>
                    <th>bocalengua</th>
                    <th>bocalengiadescrip</th>
                    <th>bocadentadura</th>
                    <th>bocadentaduradescrip</th>
                    <th>bocaorofaringe</th>
                    <th>bocaorofaringedescrip</th>
                    <th>Cuellotiroides</th>
                    <th>Cuellotiroidesdescrip</th>
                    <th>Torax</th>
                    <th>Toraxdescrip</th>
                    <th>examenmmas</th>
                    <th>examenmmasdescrip</th>
                    <th>pulmones</th>
                    <th>pulmonesdescrip</th>
                    <th>corazon</th>
                    <th>corazondescrip</th>
                    <th>abdomenviceras</th>
                    <th>abdomenvicerasdescrip</th>
                    <th>abdomenhernias</th>
                    <th>abdomenherniasdescrip</th>
                    <th>abdomenganglios</th>
                    <th>abdomengangliosdescrip</th>
                    <th>abdomengenitales</th>
                    <th>abdomengenitalesdescrip</th>
                    <th>extremimienbrosuperior</th>
                    <th>extremimienbrosuperiordescrip</th>
                    <th>extremimienbrotinel</th>
                    <th>extremimienbrotineldescrip</th>
                    <th>extremimienbroPhalen</th>
                    <th>extremimienbroPhalendescrip</th>
                    <th>sistemanerviosomarcha</th>
                    <th>sistemanerviosomarchadescrip</th>
                    <th>sistemanerviososensibilidad</th>
                    <th>sistemanerviososensibilidadescrip</th>
                    <th>sistemanerviososicologica</th>
                    <th>sistemanerviososicologicadescrip</th>
                    <th>ampliacionhallasgos</th>

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
                      <td><a>{{ $item->Peso }}</a></td>
                      <td><a>{{ $item->presionarterial }}</a></td>
                      <td><a>{{ $item->pulso }}</a></td>
                      <td><a>{{ $item->temperatura }}</a></td>
                      <td><a>{{ $item->talla }}</a></td>
                      <td><a>{{ $item->frecuenciarespira }}</a></td>
                      <td><a>{{ $item->dominancia }}</a></td>
                      <td><a>{{ $item->indicemasa }}</a></td>
                      <td><a>{{ $item->diagnospeso }}</a></td>
                      <td><a>{{ $item->diagnospesovalor }}</a></td>
                      <td><a>{{ $item->aspectogeneral }}</a></td>
                      <td><a>{{ $item->aspectogeneraldescrip }}</a></td>
                      <td><a>{{ $item->cicatrices }}</a></td>
                      <td><a>{{ $item->cicatricesdescrip }}</a></td>
                      <td><a>{{ $item->piel }}</a></td>
                      <td><a>{{ $item->pieldescrip }}</a></td>
                      <td><a>{{ $item->craneo }}</a></td>
                      <td><a>{{ $item->creaneodescrip }}</a></td>
                      <td><a>{{ $item->ojosparpados }}</a></td>
                      <td><a>{{ $item->ojosparpadosdescrip }}</a></td>
                      <td><a>{{ $item->ojosconjuntivas }}</a></td>
                      <td><a>{{ $item->ojosconjuntivasdescrip }}</a></td>
                      <td><a>{{ $item->ojoEscleroticas }}</a></td>
                      <td><a>{{ $item->ojosEscleroticasdescrip }}</a></td>
                      <td><a>{{ $item->ojopupilas }}</a></td>
                      <td><a>{{ $item->ojospupilasdescrip }}</a></td>
                      <td><a>{{ $item->ojocorneas }}</a></td>
                      <td><a>{{ $item->ojoscorneasdescrip }}</a></td>
                      <td><a>{{ $item->ojosfondo }}</a></td>
                      <td><a>{{ $item->ojosfondodescrip }}</a></td>
                      <td><a>{{ $item->oidospabellon }}</a></td>
                      <td><a>{{ $item->oidospabellondescrip }}</a></td>
                      <td><a>{{ $item->oidosotoscopia }}</a></td>
                      <td><a>{{ $item->oidosotoscopiadescrip }}</a></td>
                      <td><a>{{ $item->oidosagudeza }}</a></td>
                      <td><a>{{ $item->oidosagudezadescrip }}</a></td>
                      <td><a>{{ $item->naristabique }}</a></td>
                      <td><a>{{ $item->naristabiquedescrip }}</a></td>
                      <td><a>{{ $item->nariscornetes }}</a></td>
                      <td><a>{{ $item->nariscornetesdescrip }}</a></td>
                      <td><a>{{ $item->narismucosas }}</a></td>
                      <td><a>{{ $item->narismucosasdescrip }}</a></td>
                      <td><a>{{ $item->bocalabios }}</a></td>
                      <td><a>{{ $item->bocalabiosdescrip }}</a></td>
                      <td><a>{{ $item->bocalengua }}</a></td>
                      <td><a>{{ $item->bocalengiadescrip }}</a></td>
                      <td><a>{{ $item->bocadentadura }}</a></td>
                      <td><a>{{ $item->bocadentaduradescrip }}</a></td>
                      <td><a>{{ $item->bocaorofaringe }}</a></td>
                      <td><a>{{ $item->bocaorofaringedescrip }}</a></td>
                      <td><a>{{ $item->Cuellotiroides }}</a></td>
                      <td><a>{{ $item->Cuellotiroidesdescrip }}</a></td>
                      <td><a>{{ $item->Torax }}</a></td>
                      <td><a>{{ $item->Toraxdescrip }}</a></td>
                      <td><a>{{ $item->examenmmas }}</a></td>
                      <td><a>{{ $item->examenmmasdescrip }}</a></td>
                      <td><a>{{ $item->pulmones }}</a></td>
                      <td><a>{{ $item->pulmonesdescrip }}</a></td>
                      <td><a>{{ $item->corazon }}</a></td>
                      <td><a>{{ $item->corazondescrip }}</a></td>
                      <td><a>{{ $item->abdomenviceras }}</a></td>
                      <td><a>{{ $item->abdomenvicerasdescrip }}</a></td>
                      <td><a>{{ $item->abdomenhernias }}</a></td>
                      <td><a>{{ $item->abdomenherniasdescrip }}</a></td>
                      <td><a>{{ $item->abdomenganglios }}</a></td>
                      <td><a>{{ $item->abdomengangliosdescrip }}</a></td>
                      <td><a>{{ $item->abdomengenitales }}</a></td>
                      <td><a>{{ $item->abdomengenitalesdescrip }}</a></td>
                      <td><a>{{ $item->extremimienbrosuperior }}</a></td>
                      <td><a>{{ $item->extremimienbrosuperiordescrip }}</a></td>
                      <td><a>{{ $item->extremimienbrotinel }}</a></td>
                      <td><a>{{ $item->extremimienbrotineldescrip }}</a></td>
                      <td><a>{{ $item->extremimienbroPhalen }}</a></td>
                      <td><a>{{ $item->extremimienbroPhalendescrip }}</a></td>
                      <td><a>{{ $item->sistemanerviosomarcha }}</a></td>
                      <td><a>{{ $item->sistemanerviosomarchadescrip }}</a></td>
                      <td><a>{{ $item->sistemanerviososensibilidad }}</a></td>
                      <td><a>{{ $item->sistemanerviososensibilidadescrip }}</a></td>
                      <td><a>{{ $item->sistemanerviososicologica }}</a></td>
                      <td><a>{{ $item->sistemanerviososicologicadescrip }}</a></td>
                      <td><a>{{ $item->ampliacionhallasgos }}</a></td>



                        <!-- <td>
                        @if ($item->parent)
                          {{ $item->parent->name }}
                        @endif
                      </td> -->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.examenfisicos.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.examenfisicos.destroy', $item->id),
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
