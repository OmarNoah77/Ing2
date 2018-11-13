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
                <h3>Importar archivo:</h3>
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ route('admin.ruta.import.excadmin') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                  <input type="file" name="import_file" />
                  {{ csrf_field() }}
                  <br/>
                  <button class="btn btn-primary">Subir Archivo</button>
                </form>
                <br/>
              </div>
	    </div>
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
