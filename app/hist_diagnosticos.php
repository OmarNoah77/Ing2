<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hist_diagnosticos extends Model
{
    protected $fillable = ['idcita','iddiagnosticocie','observacion' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(hist_diagnosticos::class);
    }
}