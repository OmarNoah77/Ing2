<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesginecoostetricos extends Model
{
   protected $fillable = ['idcita', 'menarca','ciclo','FUM','dismenorrea','enfermendaddemama','enfermedadmamacual','fechaultimacitolo','resultadocitolo','FUP','G','P','A','Mortinatos','C','Gemelares','ECT','V','Planifica','MetodoACO','DIU','Quirurjicos','tiempoplanificacionanos','tiempoplanificacionmeses','Otros'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedentesginecoostetricos::class);
    }

}
