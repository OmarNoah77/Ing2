<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('date', 'fechaaccidente', 'fechaa ccidente: ', ['required']) !!}

{!! Form::myInput('text', 'lugar', 'lugar: ', ['required']) !!}

{!! Form::myInput('text', 'lesion', 'lesion', ['required']) !!}

{!! Form::mySelect( 'secuela', 'secuela: ', config('variables.SINO')) !!}




