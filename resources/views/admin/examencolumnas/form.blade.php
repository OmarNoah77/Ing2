<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::mySelect( 'inspeccionsimetria', 'Inspeccion simetria: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'inspeccionsimetriaobserva', 'Inspeccion Simetria Observación: ', ['required']) !!}

{!! Form::mySelect( 'inspeccioncurvaturas', 'Inspeccion Curvaturas: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'inspeccioncurvaturasobserva', 'Inspección Curvaturas Observación: ', ['required']) !!}

{!! Form::mySelect( 'palpaciondolor', 'Palpacion Dolor: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'palpaciondolorobserva', 'Palpación Dolor Observación: ', ['required']) !!}

{!! Form::mySelect( 'palpacionespasmos', 'Palpaciones Pasmos: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'palpacionespasmosobserva', 'Palpacion Espasmos Observación: ', ['required']) !!}

{!! Form::mySelect( 'movilidadflexion', 'Movilidad Flexión: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'movilidadflexionobserva', 'Movilidad Flexion Observación: ', ['required']) !!}

{!! Form::mySelect( 'movilidadextension', 'Movilidad extensión: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'movilidadextensionobserva', 'Movilidad Extensión Observación: ', ['required']) !!}

{!! Form::mySelect( 'movilidadflexionlateral', 'Movilidad Flexión lateral: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'movilidadflexionlateralobserva', 'Movilidad Flexion Lateral Observación: ', ['required']) !!}

{!! Form::mySelect( 'movilidadrotacion', 'Movilidad Rotación: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'movilidadrotacionobserva', 'Movilidad Rotación Observación: ', ['required']) !!}

{!! Form::mySelect( 'marchapuntas', 'Marcha Puntas: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'marchapuntasobserva', 'Marcha Puntas Observación: ', ['required']) !!}

{!! Form::mySelect( 'marchatalones', 'Marcha Talones: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'marchatalonesobserva', 'Marcha Talones Observación: ', ['required']) !!}

{!! Form::mySelect( 'reflejospatelar', 'Reflejos Patelar: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'reflejospatelarobserva', 'Reflejos Patelar Observación: ', ['required']) !!}

{!! Form::mySelect( 'reflejosaquiliano', 'Reflejos Aquiliano: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'reflejosaquilianoobserva', 'Reflejos Aquiliano Observación: ', ['required']) !!}

{!! Form::mySelect( 'reflejostrofismo', 'Reflejos Trofismo: ', config('variables.SINO')) !!}

{!! Form::myInput( 'text', 'reflejostrofismoobserva', 'Reflejos Trofismo Observa: ', ['required']) !!}