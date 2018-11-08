<?php $title = isset($item) ? $item->idcita: "Agregar nuevo Antecedente" ?>

{!! Form::myInput('number', 'idcita', 'Codigo Cita: ', ['required']) !!}

{!! Form::myInput('number', 'Peso', 'Peso Kgs:', ['required']) !!}

{!! Form::myInput('text', 'presionarterial', 'Presionarterial:', ['required']) !!}

{!! Form::myInput('text', 'pulso', 'Pulso:', ['required']) !!}

{!! Form::myInput('text', 'temperatura', 'Temperatura Kgs:', ['required']) !!}

{!! Form::myInput('text', 'talla', 'Talla:', ['required']) !!}

{!! Form::myInput('text', 'frecuenciarespira', 'Frecuencia Respiración:', ['required']) !!}

{!! Form::myInput('text', 'dominancia', 'Dominancia:', ['required']) !!}

{!! Form::myInput('text', 'indicemasa', 'Indice Masa:', ['required']) !!}

{!! Form::myInput('text', 'diagnospeso', 'Diagnostivo peso:', ['required']) !!}

{!! Form::myInput('text', 'diagnospesovalor', 'Diagnostico Peso Valor:', ['required']) !!}

{!! Form::mySelect( 'aspectogeneral', 'Aspecto General:', config('variables.estado')) !!}

{!! Form::myInput('text', 'aspectogeneraldescrip', 'Descripción Aspecto General:', ['required']) !!}

{!! Form::mySelect( 'cicatrices', 'cicatrices:',config('variables.estado')) !!}

{!! Form::myInput('text', 'cicatricesdescrip', 'Descripción Cicatrices:', ['required']) !!}

{!! Form::mySelect( 'piel', 'piel:',config('variables.estado')) !!}

{!! Form::myInput('text', 'pieldescrip', 'Descripción Piel:', ['required']) !!}

{!! Form::mySelect( 'craneo', 'Craneo:' ,config('variables.estado')) !!}

{!! Form::myInput('text', 'creaneodescrip', 'Descripción Craneo:', ['required']) !!}

{!! Form::mySelect('ojosparpados', 'Ojos Parpados:', config('variables.estado')) !!}

{!! Form::myInput('text', 'ojosparpadosdescrip', 'Descrpción Ojos Parpados:', ['required']) !!}

{!! Form::mySelect( 'ojosconjuntivas', 'Ojos Conjuntivas:', config('variables.estado')) !!}

{!! Form::myInput('text', 'ojosconjuntivasdescrip', 'Descripción Ojos conjuntivas:', ['required']) !!}

{!! Form::mySelect( 'ojoEscleroticas', 'Ojos Escleroticas:', config('variables.estado')) !!}

{!! Form::myInput('text', 'ojosEscleroticasdescrip', 'Descripción Ojos Escleroticas:', ['required']) !!}

{!! Form::mySelect( 'ojopupilas', 'Ojod Pupilas:',config('variables.estado')) !!}

{!! Form::myInput('text', 'ojospupilasdescrip', 'Descripción Ojos Pupilas:', ['required']) !!}

{!! Form::mySelect( 'ojocorneas', 'Ojo Corneas:', config('variables.estado')) !!}

{!! Form::myInput('text', 'ojoscorneasdescrip', 'Descripción Ojos Corneas:', ['required']) !!}

{!! Form::mySelect( 'ojosfondo', 'Ojos Fondo:', config('variables.estado')) !!}

{!! Form::myInput('text', 'ojosfondodescrip', 'Descripción Ojos Fondo:', ['required']) !!}

{!! Form::mySelect( 'oidospabellon', 'Oidos Pabellon:', config('variables.estado')) !!}

{!! Form::myInput('text', 'oidospabellondescrip', 'Descripción Oidos Pabellon', ['required']) !!}

{!! Form::mySelect( 'oidosotoscopia', 'Oidos Otoscopia:', config('variables.estado')) !!}

{!! Form::myInput('text', 'oidosotoscopiadescrip', 'Descripción Oidos Otoscopia:', ['required']) !!}

{!! Form::mySelect( 'oidosagudeza', 'Oidos Agudeza:', config('variables.estado')) !!}

{!! Form::myInput('text', 'oidosagudezadescrip', 'Descripción OLidos agudeza:', ['required']) !!}

{!! Form::mySelect( 'naristabique', 'Naris Tabique:', config('variables.estado')) !!}

{!! Form::myInput('text', 'naristabiquedescrip', 'Descripción Naris Tabique:', ['required']) !!}

{!! Form::mySelect( 'nariscornetes', 'Naris Cornetes:', config('variables.estado')) !!}

{!! Form::myInput('text', 'nariscornetesdescrip', 'Descripción Naris Cornetes:', ['required']) !!}

{!! Form::mySelect( 'narismucosas', 'Naris Mucosas:',config('variables.estado')) !!}

{!! Form::myInput('text', 'narismucosasdescrip', 'Descripción Naris mucosas :', ['required']) !!}

{!! Form::mySelect( 'bocalabios', 'Boca Labios:', config('variables.estado')) !!}

{!! Form::myInput('text', 'bocalabiosdescrip', 'Descripción Boca Labios:', ['required']) !!}

{!! Form::mySelect( 'bocalengua', 'Boca Lengua:', config('variables.estado')) !!}

{!! Form::myInput('text', 'bocalengiadescrip', 'Descripción Boca Lengua:', ['required']) !!}

{!! Form::mySelect( 'bocadentadura', 'Boca Dentadura:',config('variables.estado')) !!}

{!! Form::myInput('text', 'bocadentaduradescrip', 'Descripción Boca Dentadura :', ['required']) !!}

{!! Form::mySelect( 'bocaorofaringe', 'Boca Orofaringe:',config('variables.estado')) !!}

{!! Form::myInput('text', 'bocaorofaringedescrip', 'Descripción Boca Orofaringe:', ['required']) !!}

{!! Form::mySelect( 'Cuellotiroides', 'Cuello Tiroides:',config('variables.estado')) !!}

{!! Form::myInput('text', 'Cuellotiroidesdescrip', 'Descripción Cuello Tiroides:', ['required']) !!}

{!! Form::mySelect( 'Torax', 'Torax:', config('variables.estado')) !!}

{!! Form::myInput('text', 'Toraxdescrip', 'Descripción Torax :', ['required']) !!}

{!! Form::mySelect( 'examenmmas', 'Examen mamas:', config('variables.estado')) !!}

{!! Form::myInput('text', 'examenmmasdescrip', 'Descripción Examen Mamas:', ['required']) !!}

{!! Form::mySelect( 'pulmones', 'Pulmones:', config('variables.estado')) !!}

{!! Form::myInput('text', 'pulmonesdescrip', 'Descripción Pulmones :', ['required']) !!}

{!! Form::mySelect( 'corazon', 'Corazon:', config('variables.estado')) !!}

{!! Form::myInput('text', 'corazondescrip', 'Descripción Corazon:', ['required']) !!}

{!! Form::mySelect( 'abdomenviceras', 'Abdomen Viceras:', config('variables.estado')) !!}

{!! Form::myInput('text', 'abdomenvicerasdescrip', 'Descripción Abdomen Viceras:', ['required']) !!}

{!! Form::mySelect( 'abdomenhernias', 'Abdomen Hernias:', config('variables.estado')) !!}

{!! Form::myInput('text', 'abdomenherniasdescrip', 'Descripción Abdomen Hernias:', ['required']) !!}

{!! Form::mySelect( 'abdomenganglios', 'Abdomen Ganglios:', config('variables.estado')) !!}

{!! Form::myInput('text', 'abdomengangliosdescrip', 'Descripción Abdomen ganglios:', ['required']) !!}

{!! Form::mySelect( 'abdomengenitales', 'Abdomen Genitales:', config('variables.estado')) !!}

{!! Form::myInput('text', 'abdomengenitalesdescrip', 'Descripción Abdomen Genitales:', ['required']) !!}

{!! Form::mySelect( 'extremimienbrosuperior', 'Extremidades Mienbro Superior:', config('variables.estado')) !!}

{!! Form::myInput('text', 'extremimienbrosuperiordescrip', 'Descripción Extremidades Mienbro Superior:', ['required']) !!}

{!! Form::mySelect( 'extremimienbrotinel', 'Extremidades Mienbro Tinel:', config('variables.estado')) !!}

{!! Form::myInput('text', 'extremimienbrotineldescrip', 'Descripción Extremidades Mienbro tinel:', ['required']) !!}

{!! Form::mySelect( 'extremimienbroPhalen', 'Extremidades Mienbro Phalen:',config('variables.estado')) !!}

{!! Form::myInput('text', 'extremimienbroPhalendescrip', 'Descripción Extremidades Mienbro Phalen :', ['required']) !!}

{!! Form::mySelect( 'sistemanerviosomarcha', 'Sistema Nervioso Marcha:',config('variables.estado')) !!}

{!! Form::myInput('text', 'sistemanerviosomarchadescrip', 'Descripción Sistema Nervioso marcha:', ['required']) !!}

{!! Form::mySelect( 'sistemanerviososensibilidad', 'Sistema Nervioso Sensibilidad:', config('variables.estado')) !!}

{!! Form::myInput('text', 'sistemanerviososensibilidadescrip', 'Descripción Sistema Nervioso Sensibilidad:', ['required']) !!}

{!! Form::mySelect( 'sistemanerviososicologica', 'Sistema Nervioso Sicologica:',config('variables.estado')) !!}

{!! Form::myInput('text', 'sistemanerviososicologicadescrip', 'Descripción Sistema Nervioso Sicologica:', ['required']) !!}

{!! Form::myInput('text', 'ampliacionhallasgos', 'Ampliacion Hallasgos:', ['required']) !!}



