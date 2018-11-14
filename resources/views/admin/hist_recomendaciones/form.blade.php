<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idcita', 'Codigo Cita', ['required']) !!}
{!! Form::myInput('text', 'recomendaciones', 'recomendaciones', ['required']) !!}
{!! Form::myInput('text', 'ojo', 'ojo', ['required']) !!}
{!! Form::myInput('text', 'oidos', 'oidos', ['required']) !!}
{!! Form::myInput('text', 'cara', 'cara', ['required']) !!}
{!! Form::myInput('text', 'cabeza', 'cabeza', ['required']) !!}
{!! Form::myInput('text', 'respiracion', 'respiracion', ['required']) !!}
{!! Form::myInput('text', 'traje', 'traje', ['required']) !!}
{!! Form::myInput('text', 'otros', 'otros', ['required']) !!}

