<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestigacionController extends Controller
{
    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function listar_investigaciones()
    {
        return inertia('Investigacion/ListarInvestigaciones');
    }
}
