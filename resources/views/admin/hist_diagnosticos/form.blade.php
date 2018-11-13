<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idcita', 'Codigo Cita', ['required']) !!}
{!! Form::myInput('text', 'iddiagnosticocie', 'iddiagnosticocie', ['required']) !!}
{!! Form::myInput('text', 'observacion', 'observacion', ['required']) !!}



