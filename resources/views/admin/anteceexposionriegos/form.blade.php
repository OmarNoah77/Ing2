<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('text', 'empresa', 'empresa: ', ['required']) !!}

{!! Form::myInput('text', 'oficio', 'oficio: ', ['required']) !!}

{!! Form::myInput('numeric', 'tiempoanos', 'Tiempo en años: ', ['required']) !!}

{!! Form::mySelect( 'factorriego', 'factorriego: ', config('variables.factorriesgo')) !!}

{!! Form::mySelect( 'EPP', 'EPP: ', config('variables.SINO')) !!}

{!! Form::myInput('text', 'observacion', 'observacion', ['required']) !!}






