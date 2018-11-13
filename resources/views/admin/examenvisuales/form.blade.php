<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::mySelect( 'usagafas', 'Usa Gafas: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'usalentes', 'Usa lentes: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'ultimaconsulta', 'Ultima Consulta: ', ['required']) !!}

{!! Form::myInput( 'text', 'O_D_cerca', 'Ojo Derecho Cerca: ', ['required']) !!}

{!! Form::myInput( 'text', 'O_D_lejos', 'Ojo Derecho lejos: ', ['required']) !!}

{!! Form::myInput( 'text', 'O_D_correccion', 'Ojo Derecho Correccion: ', ['required']) !!}

{!! Form::myInput( 'text', 'O_I_cerca', 'Ojo Izquierdo cerca: ', ['required']) !!}

{!! Form::myInput( 'text', 'O_I_lejos', 'Ojo Izquierdo Lejos: ', ['required']) !!}

{!! Form::myInput( 'text', 'A_o_cerca', 'A.O cerca: ', ['required']) !!}

{!! Form::myInput( 'text', 'A_o_lejos', 'A.O lejos: ', ['required']) !!}

{!! Form::myInput( 'text', 'A_O_correccion', 'A.O Correccion: ', ['required']) !!}

{!! Form::myInput( 'text', 'onservacion', 'Observación: ', ['required']) !!}





