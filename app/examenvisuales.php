<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenvisuales extends Model
{
    protected $fillable = ['idcita','usagafas','usalentes','ultimaconsulta','O_D_cerca','O_D_lejos','O_D_correccion','O_I_cerca','O_I_lejos','O_I_correccion','A_o_cerca','A_o_lejos','A_O_correccion','onservacion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentExamen()
    {
        return $this->belongsTo(examenvisuales::class);
    }
}