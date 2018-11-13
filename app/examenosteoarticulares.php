<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenosteoarticulares extends Model
{
    protected $fillable = ['idcita','dedosmano_d_deformidad','dedosmano_i_deformidad','dedospies_d_deformidad','dedospies_i_deformidad','munecas_d_deformidad','munecas_i_deformidad','codos_d_deformidad','codos_i_deformidad','nombros_d_deformidad','nombros_i_deformidad','rodillas_d_deformidad','rodillas_i_deformidad','cadera_d_deformidad','cadera_i_deformidad','tobillos_d_deformidad','tobillos_i_deformidad','dedosmano_d_rubor','dedosmano_i_rubor','dedospies_d_rubor','dedospies_i_rubor','munecas_d_rubor','munecas_i_rubor','codos_d_rubor','codos_i_rubor','nombros_d_rubor','nombros_i_rubor','rodillas_d_rubor','rodillas_i_rubor','cadera_d_rubor','cadera_i_rubor','tobillos_d_rubor','tobillos_i_rubor','dedosmano_d_color','dedosmano_i_color','dedospies_d_color','dedospies_i_color','munecas_d_color','munecas_i_color','codos_d_color','codos_i_color','nombros_d_color','nombros_i_color','rodillas_d_color','rodillas_i_color','cadera_d_color','cadera_i_color','tobillos_d_color','tobillos_i_color','dedosmano_d_sensibilidad','dedosmano_i_sensibilidad','dedospies_d_sensibilidad','dedospies_i_sensibilidad','munecas_d_sensibilidad','munecas_i_sensibilidad','codos_d_sensibilidad','codos_i_sensibilidad', 'nombros_d_sensibilidad','nombros_i_sensibilidad','rodillas_d_sensibilidad','rodillas_i_sensibilidad','cadera_d_sensibilidad','cadera_i_sensibilidad','tobillos_d_sensibilidad','tobillos_i_sensibilidad','dedosmano_d_edema','dedosmano_i_edema','dedospies_d_edema','dedospies_i_edema','munecas_d_edema','munecas_i_edema','codos_d_edema','codos_i_edema','nombros_d_edema','nombros_i_edema','rodillas_d_edema','rodillas_i_edema','cadera_d_edema','cadera_i_edema','tobillos_d_edema','tobillos_i_edema','dedosmano_d_dolor','dedosmano_i_dolor','dedospies_d_dolor','dedospies_i_dolor','munecas_d_dolor','munecas_i_dolor','codos_d_dolor','codos_i_dolor','nombros_d_dolor','nombros_i_dolor','rodillas_d_dolor','rodillas_i_dolor','cadera_d_dolor','cadera_i_dolor','tobillos_d_dolor','tobillos_i_dolor','dedosmano_d_limitacion','dedosmano_i_limitacion','dedospies_d_limitacion','dedospies_i_limitacion','munecas_d_limitacion','munecas_i_limitacion','codos_d_limitacion','codos_i_limitacion','nombros_d_limitacion','nombros_i_limitacion','rodillas_d_limitacion','rodillas_i_limitacion','cadera_d_limitacion','cadera_i_limitacion','tobillos_d_limitacion','tobillos_i_limitacion','funcion_motora_espontanea','funcion_motora_conservada','observaciones'];




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