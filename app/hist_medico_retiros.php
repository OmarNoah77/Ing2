<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hist_medico_retiros extends Model
{
    protected $fillable = ['idcita','normal','normaldescipcion','remision','eps','arl','observaciones' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(hist_medico_retiros::class);
    }
}