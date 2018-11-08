<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenfisicos extends Model
{

   protected $fillable = ['idcita', 'Peso','presionarterial','pulso','temperatura','talla','frecuenciarespira','dominancia','indicemasa','diagnospeso','diagnospesovalor','aspectogeneral','aspectogeneraldescrip','cicatrices','cicatricesdescrip','piel','pieldescrip','craneo','creaneodescrip','ojosparpados','ojosparpadosdescrip','ojosconjuntivas','ojosconjuntivasdescrip','ojoEscleroticas','ojosEscleroticasdescrip','ojopupilas','ojospupilasdescrip','ojocorneas','ojoscorneasdescrip','ojosfondo','ojosfondodescrip','oidospabellon','oidospabellondescrip','oidosotoscopia','oidosotoscopiadescrip','oidosagudeza','oidosagudezadescrip','naristabique','naristabiquedescrip','nariscornetes','narismucosas','narismucosasdescrip','bocalabios','bocalabiosdescrip','bocalengua','bocalengiadescrip','bocadentadura','bocadentaduradescrip','bocaorofaringe','bocaorofaringedescrip','Cuellotiroides','Cuellotiroidesdescrip','Torax','Toraxdescrip','examenmmas','examenmmasdescrip','pulmones','pulmonesdescrip','corazon','corazondescrip','abdomenviceras','abdomenvicerasdescrip','abdomenhernias','abdomenherniasdescrip','abdomenganglios','abdomengangliosdescrip','abdomengenitales','abdomengenitalesdescrip','extremimienbrosuperior','extremimienbrosuperiordescrip','extremimienbroPhalen','extremimienbroPhalendescrip','sistemanerviosomarcha','sistemanerviosomarchadescrip','sistemanerviososensibilidad','sistemanerviososensibilidadescrip','sistemanerviososicologica','sistemanerviososicologicadescrip','ampliacionhallasgos'];
    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(examenfisicos::class);
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
