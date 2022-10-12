<?php

namespace App\Constants;

class PersonaConstant
{
    public static function genero()
    {
        return collect([
            collect(['id' => 1, 'nombre' => 'Femenino']),
            collect(['id' => 2, 'nombre' => 'Masculino']),
        ]);
    }

    public static function getGenero($id)
    {
        return PersonaConstant::genero()->where('id', $id)->first();
    }
}
