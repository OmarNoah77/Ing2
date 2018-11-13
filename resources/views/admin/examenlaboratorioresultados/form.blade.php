<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput( 'text', 'id_examen', 'Codigo Examen: ', ['required']) !!}

{!! Form::myInput( 'date', 'fechaexamen', 'Fecha Examen: ', ['required']) !!}

{!! Form::myInput( 'text', 'resultado', 'resultado: ', ['required']) !!}

{!! Form::myInput( 'text', 'observaciones', 'Observaciones: ', ['required']) !!}

{!! Form::myInput( 'text', 'hemoclaficiacion', 'Hemoclaficiacion: ', ['required']) !!}






