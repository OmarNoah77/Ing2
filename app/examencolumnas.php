<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examencolumnas extends Model
{
    protected $fillable = ['idcita',
    'inspeccionsimetria'  ,
    'inspeccionsimetriaobserva' ,
    'inspeccioncurvaturas'  ,
    'inspeccioncurvaturasobserva' ,
    'palpaciondolor'  ,
    'palpaciondolorobserva' ,
    'palpacionespasmos'  ,
    'palpacionespasmosobserva' ,
    'movilidadflexion'  ,
    'movilidadflexionobserva' ,
    'movilidadextension'  ,
    'movilidadextensionobserva',
    'movilidadflexionlateral'  ,
    'movilidadflexionlateralobserva' ,
    'movilidadrotacion'  ,
    'movilidadrotacionobserva' ,
    'marchapuntas'  ,
    'marchapuntasobserva' ,
    'marchatalones'  ,
    'marchatalonesobserva' ,
    'reflejospatelar'  ,
    'reflejospatelarobserva' ,
    'reflejosaquiliano'  ,
    'reflejosaquilianoobserva' ,
    'reflejostrofismo'  ,
    'reflejostrofismoobserva' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentExamen()
    {
        return $this->belongsTo(examencolumnas::class);
    }
}