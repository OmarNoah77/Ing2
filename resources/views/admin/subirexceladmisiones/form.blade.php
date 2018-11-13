<?php $title = isset($item) ? $item->name: "Agregar admisiones" ?>
{!! Form::myInput('text', 'tipo_documentoentidad', 'Tipo documento entidad: ', ['required']) !!}
{!! Form::myInput('text', 'numerodocumentoentidad', 'Numero documento entidad: ', ['required']) !!}
{!! Form::myInput('text', 'tipodocumentocliente', 'Tipo documento cliente: ', ['required']) !!}
{!! Form::myInput('text', 'numerodocumentocleinte', 'Numero documento cliente: ', ['required']) !!}
{!! Form::myInput('text', 'primerapellido', 'Primer Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'segundoapellido', 'Segundo Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'primernombre', 'Primer Nombre: ', ['required']) !!}
{!! Form::myInput('text', 'segundonombre', 'Segundo Nombre: ', ['required']) !!}
{!! Form::myInput('date', 'Fechacita', 'Fecha cita: ', ['required']) !!}
{!! Form::myInput('datetime-local', 'Horacita', 'Hora Cita: ', ['required']) !!}
{!! Form::myInput('number', 'tiposervicio', 'Tipo servicio: ', ['required']) !!}
{!! Form::myInput('number', 'examen', 'Examen: ', ['required']) !!}
{!! Form::myInput('number', 'enfasis', 'Enfasis: ', ['required']) !!}
{!! Form::myInput('number', 'profesional', 'Profesional: ', ['required']) !!}
{!! Form::myInput('date', 'fechaadmision', 'Fecha admision: ', ['required']) !!}
{!! Form::myInput('date', 'estadoproceso', 'Estado proceso: ', ['required']) !!}

