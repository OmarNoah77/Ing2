<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hist_concepto_ing_rets extends Model
{
    protected $fillable = ['idcita','apto','aptoobservacion','aptorestriccion','aptorestriccionobservacion','aptorestriccionnormal','aptorestriccionnormalobservacion','aplazado','aplazadoobservacion','noapto','noaptoobservacion','requiereubicacion' ,'restricciones'   ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(hist_concepto_ing_rets::class);
    }
}