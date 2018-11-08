<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedenteshabitos extends Model
{
   protected $fillable = ['idcita', 'idhabito','pregunta','tiempo_fecuencia_cual'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedenteshabitos::class);
    }

}
