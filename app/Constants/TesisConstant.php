<?php

namespace App\Constants;

class TesisConstant
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
        return TesisConstant::estadoEjecucion()->where('id', $id)->first();
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
        return TesisConstant::estadoValidacion()->where('id', $id)->first();
    }
}
