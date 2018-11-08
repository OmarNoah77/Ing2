<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesfamiliares extends Model
{
   protected $fillable = ['idcita', 'HTA','HTAparentesco','Infarto','Infartoparentesco','ACV','ACVparentesco','Diabetes','Diabetesparentesco','Asma','Asmaparentesco','Artritis','Artritisparentesco','Cancer','Cancerparentesco','Enf_Mental','Enf_Mentalparentesco','Epilepsia','EpilepsiaMentalparentesco','Alergias','AlergiasMentalparentesco','otros'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedentesfamiliares::class);
    }

}
