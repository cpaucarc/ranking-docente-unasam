<?php

namespace App\Constants;

class InvestigacionConstant
{
    public static function estadoEjecucion()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'En ejecución']),
            collect(['id' => 2, 'nombre' => 'Sin iniciar']),
            collect(['id' => 3, 'nombre' => 'Culminado']),
        ]);
    }

    public static function getEstadoEjecucion($id)
    {
        return InvestigacionConstant::estadoEjecucion()->where('id', $id)->first();
    }


    public static function estadoValidacion()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Sin validar']),
            collect(['id' => 2, 'nombre' => 'Validado']),
            collect(['id' => 3, 'nombre' => 'Observado']),
        ]);
    }

    public static function getEstadoValidacion($id)
    {
        return InvestigacionConstant::estadoValidacion()->where('id', $id)->first();
    }


    public static function financiador()
    {
        return collect([
            collect(['id' => 0, 'nombre' => 'Ninguno']),
            collect(['id' => 1, 'nombre' => 'FONDECYT']),
            collect(['id' => 2, 'nombre' => 'Recursos Determinados Canon, SobreCanon y Regalias']),
            collect(['id' => 3, 'nombre' => 'Recursos Ordinarios']),
            collect(['id' => 4, 'nombre' => 'Otro']),
        ]);
    }

    public static function getFinanciador($id)
    {
        return InvestigacionConstant::financiador()->where('id', $id)->first();
    }


    public static function tipoParticipante()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Responsable']),
            collect(['id' => 2, 'nombre' => 'Corresponsable']),
        ]);
    }

    public static function getTipoParticipante($id)
    {
        return InvestigacionConstant::tipoParticipante()->where('id', $id)->first();
    }


    public static function tipoPublicacion()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'En revista indexada']),
            collect(['id' => 2, 'nombre' => 'En revista no indexada']),
        ]);
    }

    public static function getTipoPublicacion($id)
    {
        return InvestigacionConstant::tipoPublicacion()->where('id', $id)->first();
    }
}
