<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecerevisionsistemas extends Model
{
   protected $fillable = ['idcita', 'sentidos','sentidosDescripcion','respiratorio','respiratorioDescripcion','cardiovascular','cardiovascularDescripcion','gastrointestinal','gastrointestinalDescrip','geniurinario','geniurinarioDescrip','osteomuscular','osteomuscularDescrip','endocrino','endocrinoDescrip','Piel','PielDescrip','observaciones'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecerevisionsistemas::class);
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
