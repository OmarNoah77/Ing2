<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidades extends Model
{
    protected $fillable = ['idempresa','Descripcion' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(especialidades::class);
    }
}