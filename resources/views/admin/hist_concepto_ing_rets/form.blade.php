<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idcita', 'Codigo Cita', ['required']) !!}
{!! Form::mySelect( 'apto', 'apto', config('variables.SINO')) !!}
{!! Form::myInput('text', 'aptoobservacion', 'aptoobservacion', ['required']) !!}

{!! Form::mySelect( 'aptorestriccion', 'aptorestriccion', config('variables.SINO')) !!}
{!! Form::myInput('text', 'aptorestriccionobservacion', 'aptorestriccionobservacion', ['required']) !!}


{!! Form::mySelect( 'aptorestriccionnormal', 'aptorestriccionnormal', config('variables.SINO')) !!}
{!! Form::myInput('text', 'aptorestriccionnormalobservacion', 'aptorestriccionnormalobservacion', ['required']) !!}


{!! Form::mySelect( 'aplazado', 'aplazado', config('variables.SINO')) !!}
{!! Form::myInput('text', 'aplazadoobservacion', 'aplazadoobservacion', ['required']) !!}

{!! Form::mySelect( 'noapto', 'noapto', config('variables.SINO')) !!}
{!! Form::myInput('text', 'noaptoobservacion', 'Noaptoobservacion', ['required']) !!}

{!! Form::myInput('text', 'restricciones', 'restricciones', ['required']) !!}


