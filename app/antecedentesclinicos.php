<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesclinicos extends Model
{
   protected $fillable = ['idcita', 'idantecedente','descripcion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedentesclinicos::class);
    }

}
