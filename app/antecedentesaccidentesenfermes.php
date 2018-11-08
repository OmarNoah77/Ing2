<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesaccidentesenfermes extends Model
{
   protected $fillable = ['idcita', 'Nombreempresa','Fecha','Seccioncargo','diagnistico','secuela','reubicacion','observacion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedentesaccidentesenfermes::class);
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
