<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenosteoarticulares extends Model
{
    protected $fillable = ['idcita','dedosmano_D_DEFORMIDAD','dedosmano_I_DEFORMIDAD','dedospies_D_DEFORMIDAD','dedospies_I_DEFORMIDAD','munecas_D_DEFORMIDAD','munecas_I_DEFORMIDAD','codos_D_DEFORMIDAD','codos_I_DEFORMIDAD','nombros_D_DEFORMIDAD','nombros_I_DEFORMIDAD','rodillas_D_DEFORMIDAD','rodillas_I_DEFORMIDAD','cadera_D_DEFORMIDAD','cadera_I_DEFORMIDAD','tobillos_D_DEFORMIDAD','tobillos_I_DEFORMIDAD','dedosmano_D_RUBOR','dedosmano_I_RUBOR','dedospies_D_RUBOR','dedospies_I_RUBOR','munecas_D_RUBOR','munecas_I_RUBOR','codos_D_RUBOR','codos_I_RUBOR','nombros_D_RUBOR','nombros_I_RUBOR','rodillas_D_RUBOR','rodillas_I_RUBOR','cadera_D_RUBOR','cadera_I_RUBOR','tobillos_D_RUBOR','tobillos_I_RUBOR','dedosmano_D_COLOR','dedosmano_I_COLOR','dedospies_D_COLOR','dedospies_I_COLOR','munecas_D_COLOR','munecas_I_COLOR','codos_D_COLOR','codos_I_COLOR','nombros_D_COLOR','nombros_I_COLOR','rodillas_D_COLOR','rodillas_I_COLOR','cadera_D_COLOR','cadera_I_COLOR','tobillos_D_COLOR','tobillos_I_COLOR','dedosmano_D_SENSIBILIDAD','dedosmano_I_SENSIBILIDAD','dedospies_D_SENSIBILIDAD','dedospies_I_SENSIBILIDAD','munecas_D_SENSIBILIDAD','munecas_I_SENSIBILIDAD','codos_D_SENSIBILIDAD','codos_I_SENSIBILIDAD', 'nombros_D_SENSIBILIDAD','nombros_I_SENSIBILIDAD','rodillas_D_SENSIBILIDAD','rodillas_I_SENSIBILIDAD','cadera_D_SENSIBILIDAD','cadera_I_SENSIBILIDAD','tobillos_D_SENSIBILIDAD','tobillos_I_SENSIBILIDAD','dedosmano_D_EDEMA','dedosmano_I_EDEMA','dedospies_D_EDEMA','dedospies_I_EDEMA','munecas_D_EDEMA','munecas_I_EDEMA','codos_D_EDEMA','codos_I_EDEMA','nombros_D_EDEMA','nombros_I_EDEMA','rodillas_D_EDEMA','rodillas_I_EDEMA','cadera_D_EDEMA','cadera_I_EDEMA','tobillos_D_EDEMA','tobillos_I_EDEMA','dedosmano_D_DOLOR','dedosmano_I_DOLOR','dedospies_D_DOLOR','dedospies_I_DOLOR','munecas_D_DOLOR','munecas_I_DOLOR','codos_D_DOLOR','codos_I_DOLOR','nombros_D_DOLOR','nombros_I_DOLOR','rodillas_D_DOLOR','rodillas_I_DOLOR','cadera_D_DOLOR','cadera_I_DOLOR','tobillos_D_DOLOR','tobillos_I_DOLOR','dedosmano_D_LIMITACION','dedosmano_I_LIMITACION','dedospies_D_LIMITACION','dedospies_I_LIMITACION','munecas_D_LIMITACION','munecas_I_LIMITACION','codos_D_LIMITACION','codos_I_LIMITACION','nombros_D_LIMITACION','nombros_I_LIMITACION','rodillas_D_LIMITACION','rodillas_I_LIMITACION','cadera_D_LIMITACION','cadera_I_LIMITACION','tobillos_D_LIMITACION','tobillos_I_LIMITACION','funcion_motora_espontanea','funcion_motora_conservada','observaciones'];




    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentExamen()
    {
        return $this->belongsTo(examenosteoarticulares::class);
    }
}