<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hist_recomendaciones extends Model
{
    protected $fillable = ['idcita','recomendaciones','ojo','oidos','cara','cabeza','respiracion','traje' ,'otros'   ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(hist_recomendaciones::class);
    }
}