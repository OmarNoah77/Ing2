<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::mySelect( 'idantecedente', 'Codigo antecedente: ', config('variables.antecedenteclinicios')) !!}

{!! Form::myInput('text', 'descripcion', 'Describa hallazgos:', ['required']) !!}







