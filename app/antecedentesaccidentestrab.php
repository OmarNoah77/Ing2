<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesaccidentestrab extends Model
{
   protected $fillable = ['idcita', 'fechaaccidente','lugar','lesion','secuela'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedentesaccidentestrab::class);
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
