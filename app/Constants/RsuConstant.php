<?php

namespace App\Constants;

class RsuConstant
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
        return RsuConstant::estadoEjecucion()->where('id', $id)->first();
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
        return RsuConstant::estadoValidacion()->where('id', $id)->first();
    }


    public static function tipoParticipante()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Responsable']),
            collect(['id' => 2, 'nombre' => 'Participante']),
        ]);
    }

    public static function getTipoParticipante($id)
    {
        return RsuConstant::tipoParticipante()->where('id', $id)->first();
    }
}
