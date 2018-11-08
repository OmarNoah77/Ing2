<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('date', 'menarca', 'menarca: ', ['required']) !!}

{!! Form::myInput('text', 'ciclo', 'ciclo', ['required']) !!}

{!! Form::myInput('date', 'FUM', 'FUM', ['required']) !!}

{!! Form::mySelect( 'dismenorrea', 'dismenorrea', config('variables.boolean')) !!}

{!! Form::mySelect( 'enfermendaddemama', 'Enfermendad de mama', config('variables.boolean')) !!}

{!! Form::myInput('text', 'enfermedadmamacual', 'Enfermedad de mama cual?', ['required']) !!}

{!! Form::myInput('date', 'fechaultimacitolo', 'fechaultimacitolo', ['required']) !!}

{!! Form::myInput('text', 'resultadocitolo', 'Resultado Citología', ['required']) !!}

{!! Form::myInput('text', 'FUP', 'FUP', ['required']) !!}

{!! Form::myInput('text', 'G', 'G', ['required']) !!}

{!! Form::myInput('text', 'P', 'P', ['required']) !!}

{!! Form::myInput('text', 'A', 'A', ['required']) !!}

{!! Form::myInput('text', 'Mortinatos', 'Mortinatos', ['required']) !!}

{!! Form::myInput('text', 'C', 'C', ['required']) !!}

{!! Form::myInput('text', 'Gemelares', 'Gemelares', ['required']) !!}

{!! Form::myInput('text', 'ECT', 'ECT', ['required']) !!}

{!! Form::myInput('text', 'V', 'V', ['required']) !!}

{!! Form::mySelect( 'Planifica', 'Planifica', config('variables.boolean')) !!}

{!! Form::mySelect( 'MetodoACO', 'Metodo ACO', config('variables.boolean')) !!}

{!! Form::mySelect( 'DIU', 'DIU', config('variables.boolean')) !!}

{!! Form::mySelect( 'Quirurjicos', 'Quirurjicos', config('variables.boolean')) !!}

{!! Form::myInput('numeric', 'tiempoplanificacionanos', 'Tiempo planificacion /años', ['required']) !!}

{!! Form::myInput('numeric', 'tiempoplanificacionmeses', 'Tiempo planificacion / meses', ['required']) !!}

{!! Form::myInput('text', 'Otros', 'Otros', ['required']) !!}

boolean