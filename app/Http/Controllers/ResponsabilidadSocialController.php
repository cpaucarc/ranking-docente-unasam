<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsabilidadSocialController extends Controller
{
    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function listar_responsabilidad_social()
    {
        return inertia('Responsabilidad/ListarResponsabilidadSocial');
    }
}
