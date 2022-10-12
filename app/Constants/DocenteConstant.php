<?php

namespace App\Constants;

class DocenteConstant
{
    public static function categoria()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Principal']),
            collect(['id' => 2, 'nombre' => 'Asociado']),
            collect(['id' => 3, 'nombre' => 'Auxiliar']),
            collect(['id' => 4, 'nombre' => 'Docente Contratado A-1']),
            collect(['id' => 5, 'nombre' => 'Docente Contratado B-1']),
            collect(['id' => 6, 'nombre' => 'Docente Contratado B-2']),
            collect(['id' => 7, 'nombre' => 'Docente Contratado B-3']),
            collect(['id' => 8, 'nombre' => 'Jefe de Prácticas']),
            collect(['id' => 9, 'nombre' => 'Servicio Académico Profesional']),
        ]);
    }

    public static function getCategoria($id)
    {
        return DocenteConstant::categoria()->where('id', $id)->first();
    }



    public static function condicion()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Nombrado']),
            collect(['id' => 2, 'nombre' => 'Contratado']),
        ]);
    }

    public static function getCondicion($id)
    {
        return DocenteConstant::condicion()->where('id', $id)->first();
    }



    public static function dedicacion()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Tiempo completo']),
            collect(['id' => 2, 'nombre' => 'Tiempo parcial']),
        ]);
    }

    public static function getDedicacion($id)
    {
        return DocenteConstant::dedicacion()->where('id', $id)->first();
    }



    public static function grado()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Magister']),
            collect(['id' => 2, 'nombre' => 'Bachiller']),
            collect(['id' => 3, 'nombre' => 'Doctor']),
        ]);
    }

    public static function getGrado($id)
    {
        return DocenteConstant::grado()->where('id', $id)->first();
    }
}
