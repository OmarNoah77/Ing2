@extends('admin.adminlayout')

@section('page-header')
  Historia Recomendaciones <small>actualizar</small>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::model($item, [
                'action' => ['hist_recomendacionesController@update', $item->id],
                'method' => 'put',
                'files' => true
            ])
        !!}

        <div class="box-body" style="margin:10px;">
          @include('admin.hist_recomendaciones.form')
        </div>

      	<div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">Guardar</button>
          <a class="btn btn-warning " href="{{ route(ADMIN.'.hist_recomendaciones.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Cancelar</a>
      	</div>

        {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
