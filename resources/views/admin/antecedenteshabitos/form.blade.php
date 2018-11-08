<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('number', 'idhabito', 'Codigo habito: ', ['required']) !!}

{!! Form::myInput('text', 'pregunta', 'SI / NO', ['required']) !!}

{!! Form::myInput('text', 'tiempo_fecuencia_cual', 'Tiempo/Fecuencia/Cual: ', ['required']) !!}





