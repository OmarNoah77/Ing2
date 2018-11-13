<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenlaboratorioresultados extends Model
{
    protected $fillable = ['idcita','id_examen','fechaexamen','resultado','observaciones','hemoclaficiacion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentExamen()
    {
        return $this->belongsTo(examenlaboratorioresultados::class);
    }
}