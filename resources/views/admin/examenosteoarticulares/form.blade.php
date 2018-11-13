<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::mySelect( 'dedosmano_d_deformidad', 'DEFORMIDAD / dedos mano D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_deformidad', 'DEFORMIDAD dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_deformidad', 'DEFORMIDAD dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_deformidad', 'DEFORMIDAD dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_deformidad', 'DEFORMIDAD muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_deformidad', 'DEFORMIDAD munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_deformidad', 'DEFORMIDAD codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_deformidad', 'DEFORMIDAD codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_deformidad', 'DEFORMIDAD hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_deformidad', 'DEFORMIDAD hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_deformidad', 'DEFORMIDAD rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_deformidad', 'DEFORMIDAD rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_deformidad', 'DEFORMIDAD cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_deformidad', 'DEFORMIDAD cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_deformidad', 'DEFORMIDAD tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_deformidad', 'DEFORMIDAD tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_rubor', 'RUBOR dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_rubor', 'RUBOR dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_rubor', 'RUBOR dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_rubor', 'RUBOR dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_rubor', 'RUBOR muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_rubor', 'RUBOR munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_rubor', 'RUBOR codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_rubor', 'RUBOR codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_rubor', 'RUBOR hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_rubor', 'RUBOR hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_rubor', 'RUBOR rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_rubor', 'RUBOR rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_rubor', 'RUBOR cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_rubor', 'RUBOR cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_rubor', 'RUBOR tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_rubor', 'RUBOR tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_d_color', 'COLOR / dedos mano D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_color', 'COLOR dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_color', 'COLOR dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_color', 'COLOR dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_color', 'COLOR muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_color', 'COLOR munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_color', 'COLOR codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_color', 'COLOR codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_color', 'COLOR hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_color', 'COLOR hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_color', 'COLOR rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_color', 'COLOR rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_color', 'COLOR cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_color', 'COLOR cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_color', 'COLOR tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_color', 'COLOR tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_d_sensibilidad', 'SENSIBILIDAD / dedos mano D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_sensibilidad', 'SENSIBILIDAD dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_sensibilidad', 'SENSIBILIDAD dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_sensibilidad', 'SENSIBILIDAD dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_sensibilidad', 'SENSIBILIDAD muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_sensibilidad', 'SENSIBILIDAD munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_sensibilidad', 'SENSIBILIDAD codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_sensibilidad', 'SENSIBILIDAD codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_sensibilidad', 'SENSIBILIDAD hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_sensibilidad', 'SENSIBILIDAD hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_sensibilidad', 'SENSIBILIDAD rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_sensibilidad', 'SENSIBILIDAD rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_sensibilidad', 'SENSIBILIDAD cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_sensibilidad', 'SENSIBILIDAD cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_sensibilidad', 'SENSIBILIDAD tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_sensibilidad', 'SENSIBILIDAD tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_d_edema', 'EDEMA / dedos mano D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_edema', 'EDEMA dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_edema', 'EDEMA dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_edema', 'EDEMA dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_edema', 'EDEMA muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_edema', 'EDEMA munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_edema', 'EDEMA codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_edema', 'EDEMA codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_edema', 'EDEMA hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_edema', 'EDEMA hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_edema', 'EDEMA rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_edema', 'EDEMA rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_edema', 'EDEMA cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_edema', 'EDEMA cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_edema', 'EDEMA tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_edema', 'EDEMA tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_d_dolor', 'DOLOR / dedos mano D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_dolor', 'DOLOR dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_dolor', 'DOLOR dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_dolor', 'DOLOR dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_dolor', 'DOLOR muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_dolor', 'DOLOR munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_dolor', 'DOLOR codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_dolor', 'DOLOR codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_dolor', 'DOLOR hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_dolor', 'DOLOR hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_dolor', 'DOLOR rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_dolor', 'DOLOR rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_dolor', 'DOLOR cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_dolor', 'DOLOR cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_dolor', 'DOLOR tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_dolor', 'DOLOR tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_d_limitacion', 'LIMITACION / dedos mano D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedosmano_i_limitacion', 'LIMITACION dedos mano I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_d_limitacion', 'LIMITACION dedos pies D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'dedospies_i_limitacion', 'LIMITACION dedos pies I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_d_limitacion', 'LIMITACION muñecas D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'munecas_i_limitacion', 'LIMITACION munecas I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_d_limitacion', 'LIMITACION codos D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'codos_i_limitacion', 'LIMITACION codos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_d_limitacion', 'LIMITACION hombro D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'nombros_i_limitacion', 'LIMITACION hombro I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_d_limitacion', 'LIMITACION rodilla D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'rodillas_i_limitacion', 'LIMITACION rodilla I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_d_limitacion', 'LIMITACION cadera D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'cadera_i_limitacion', 'LIMITACION cadera I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_d_limitacion', 'LIMITACION tobillo D: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_limitacion', 'LIMITACION tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'tobillos_i_limitacion', 'LIMITACION tobillos I: ', config('variables.SINO')) !!}

{!! Form::mySelect( 'funcion_motora_espontanea', 'Funcion Motora Espontanea: ',  config('variables.SINO')) !!}

{!! Form::mySelect( 'funcion_motora_conservada', 'Funcion Motora Conservada : ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'observaciones', 'Observaciones: ', ['required']) !!}
