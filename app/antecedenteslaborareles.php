<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedenteslaborareles extends Model
{
   protected $fillable = ['idcita', 'Nombreempresa','ocupacion','idriesgo','tiempoenmeses','observaciones','uso_deepp'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedenteslaborareles::class);
    }

    public function empresas()
    {
        return $this->belongsTo('App\Empresa','idempresa');
    }

    public function ocupaciones()
    {
        return $this->belongsTo('App\ocupaciones','idocupacion');
    }

}
