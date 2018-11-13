<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idcita', 'Codigo Cita', ['required']) !!}
{!! Form::myInput('text', 'vacuna', 'vacuna', ['required']) !!}
{!! Form::myInput('date', 'Fecha', 'Fecha', ['required']) !!}
{!! Form::myInput('date', 'proximadosis', 'proximadosis: ', ['required']) !!}



