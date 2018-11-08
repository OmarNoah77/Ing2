<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::mySelect( 'sentidos', 'sentidos:', config('variables.SINO')) !!}

{!! Form::myInput('text', 'sentidosDescripcion', 'Descripción Sentidos:', ['required']) !!}

{!! Form::mySelect( 'respiratorio', 'respiratorio:', config('variables.SINO')) !!}

{!! Form::myInput('text', 'respiratorioDescripcion', 'Descripción Respiratorio:', ['required']) !!}

{!! Form::mySelect( 'cardiovascular', 'cardiovascular:', config('variables.SINO')) !!}

{!! Form::myInput('text', 'cardiovascularDescripcion', 'Descripción Cardiovascular:', ['required']) !!}

{!! Form::mySelect( 'gastrointestinal', 'gastrointestinal:', config('variables.SINO')) !!}

{!! Form::myInput('text', 'gastrointestinalDescrip', 'Descripción Gastrointestinal:', ['required']) !!}

{!! Form::mySelect( 'geniurinario', 'geniurinario:', config('variables.SINO')) !!}

{!! Form::myInput('text', 'geniurinarioDescrip', 'Descripción Urinario:', ['required']) !!}

{!! Form::mySelect( 'osteomuscular', 'osteomuscular:', config('variables.SINO')) !!}

{!! Form::myInput('text', 'osteomuscularDescrip', 'Descripción Osteomuscular:', ['required']) !!}

{!! Form::mySelect( 'endocrino', 'endocrino:',config('variables.SINO')) !!}

{!! Form::myInput('text', 'endocrinoDescrip', 'Descripción Endocrino:', ['required']) !!}

{!! Form::mySelect( 'piel', 'piel:',config('variables.SINO')) !!}

{!! Form::myInput('text', 'PielDescrip', 'Descripción Piel:', ['required']) !!}

{!! Form::myInput('text', 'observaciones', 'observaciones:', ['required']) !!}

