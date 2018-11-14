<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idcita', 'Codigo Cita', ['required']) !!}
{!! Form::mySelect( 'normal', 'Normal', config('variables.SINO')) !!}
{!! Form::myInput('text', 'normaldescipcion', 'Normal Descripción', ['required']) !!}
{!! Form::mySelect( 'remision', 'Remisión', config('variables.SINO')) !!}
{!! Form::myInput('text', 'eps', 'EPS', ['required']) !!}
{!! Form::myInput('text', 'arl', 'ARL', ['required']) !!}


