<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anteceexposionriegos extends Model
{
   protected $fillable = ['idcita', 'empresa','oficio','tiempoanos','factorriego','EPP','observacion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(anteceexposionriegos::class);
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
