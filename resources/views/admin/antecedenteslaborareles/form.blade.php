<?php $title = isset($item) ? $item->descripcion: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('text', 'Nombreempresa', 'Empresa: ', ['required']) !!}

{!! Form::myInput('text', 'ocupacion', 'Ocupacion: ', ['required']) !!}

{!! Form::mySelect('idriesgo', 'Riesgo: ', config('variables.riesgo')) !!}

{!! Form::myInput('number', 'tiempoenmeses', 'Tiempo (Meses): ', ['required']) !!}

{!! Form::myInput('text', 'observaciones', 'Observaciones: ', ['required']) !!}

{!! Form::myInput('text', 'uso_deepp', 'Uso deepp: ', ['required']) !!}



