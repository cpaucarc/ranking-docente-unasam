<?php

namespace App\Http\Controllers;

use App\Models\Investigacion;
use App\Http\Requests\StoreInvestigacionRequest;
use App\Http\Requests\UpdateInvestigacionRequest;
use Inertia\Response;
use Inertia\ResponseFactory;

class InvestigacionController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        $personas = \App\Models\Persona::query()->limit(20)->get();
        return inertia('Investigacion/Index', compact('personas'));
    }

    public function create(): Response|ResponseFactory
    {
        return inertia('Investigacion/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreInvestigacionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestigacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Investigacion $investigacion
     * @return \Illuminate\Http\Response
     */
    public function show(Investigacion $investigacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Investigacion $investigacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigacion $investigacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateInvestigacionRequest $request
     * @param \App\Models\Investigacion $investigacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestigacionRequest $request, Investigacion $investigacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Investigacion $investigacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigacion $investigacion)
    {
        //
    }
}
