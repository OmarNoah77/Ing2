<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inmunizaciones extends Model
{
    protected $fillable = ['idcita','vacuna','Fecha','proximadosis'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentExamen()
    {
        return $this->belongsTo(inmunizaciones::class);
    }
}