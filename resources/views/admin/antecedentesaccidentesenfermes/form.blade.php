<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('text', 'Nombreempresa', 'Nombreempresa: ', ['required']) !!}

{!! Form::myInput('date', 'Fecha', 'Fecha: ', ['required']) !!}

{!! Form::myInput('text', 'Seccioncargo', 'Seccioncargo', ['required']) !!}

{!! Form::myInput('text', 'diagnistico', 'diagnistico', ['required']) !!}

{!! Form::mySelect( 'secuela', 'secuela: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'reubicacion', 'reubicacion: ', config('variables.SINO')) !!}

{!! Form::myInput('text', 'observacion', 'observacion', ['required']) !!}


