<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admisiones extends Model
{
  	protected $fillable = ['tipo_documentoentidad',
            						   'numerodocumentoentidad',
            						   'tipodocumentocliente',
            						   'numerodocumentocleinte',
            						   'primerapellido',
            						   'segundoapellido',
            						   'primernombre',
            						   'segundonombre',
            						   'fechacita',
            						   'horacita',
            						   'tiposervicio',
            						   'examen',
            						   'enfasis',
            						   'profesional',
            						   'fechaadmision',
            						   'estadoproceso'
                         ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(admisiones::class);
    }

}