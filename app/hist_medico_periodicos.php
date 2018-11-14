<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hist_medico_periodicos extends Model
{
    protected $fillable = ['idcita','normal','normaldescipcion','remision','eps','arl' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(hist_medico_periodicos::class);
    }
}