@extends('admin.adminlayout')

@section('page-header')
  Examen Columna  <small>actualizar</small>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::model($item, [
                'action' => ['examencolumnasController@update', $item->id],
                'method' => 'put',
                'files' => true
            ])
        !!}

        <div class="box-body" style="margin:10px;">
          @include('admin.examencolumnas.form')
        </div>

      	<div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">Guardar</button>
          <a class="btn btn-warning " href="{{ route(ADMIN.'.examencolumnas.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Cancelar</a>
      	</div>

        {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
