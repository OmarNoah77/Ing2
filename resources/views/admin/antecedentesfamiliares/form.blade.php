<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::mySelect( 'HTA', 'HTA', config('variables.SINO')) !!}

{!! Form::myInput('text', 'HTAparentesco', 'HTAparentesco', ['required']) !!}

{!! Form::mySelect( 'Infarto', 'Infarto ', config('variables.SINO')) !!}

{!! Form::myInput('text', 'Infartoparentesco', 'Infarto Parentesco', ['required']) !!}

{!! Form::mySelect( 'ACV', 'ACV', config('variables.SINO')) !!}

{!! Form::myInput('text', 'ACVparentesco', 'ACVparentesco', ['required']) !!}

{!! Form::mySelect( 'Diabetes', 'Diabetes', config('variables.SINO')) !!}

{!! Form::myInput('text', 'Diabetesparentesco', 'Diabetesparentesco', ['required']) !!}

{!! Form::mySelect( 'Asma', 'Asma', config('variables.SINO')) !!}

{!! Form::myInput('text', 'Asmaparentesco', 'Asmaparentesco', ['required']) !!}

{!! Form::mySelect( 'Artritis', 'Artritis ', config('variables.SINO')) !!}

{!! Form::myInput('text', 'Artritisparentesco', 'Artritisparentesco', ['required']) !!}

{!! Form::mySelect( 'Cancer', 'Cancer', config('variables.SINO')) !!}

{!! Form::myInput('text', 'Cancerparentesco', 'Cancerparentesco', ['required']) !!}

{!! Form::mySelect( 'Enf_Mental', 'Enf_Mental ', config('variables.SINO')) !!}

{!! Form::myInput('text', 'Enf_Mentalparentesco', 'Enf_Mentalparentesco', ['required']) !!}

{!! Form::mySelect( 'Epilepsia', 'Epilepsia ', config('variables.SINO')) !!}

{!! Form::myInput('text', 'EpilepsiaMentalparentesco', 'EpilepsiaMentalparentesco', ['required']) !!}

{!! Form::mySelect( 'Alergias', 'Alergias', config('variables.SINO')) !!}

{!! Form::myInput('text','AlergiasMentalparentesco', 'AlergiasMentalparentesco', ['required']) !!}

{!! Form::myInput('text', 'otros', 'otros', ['required']) !!}









