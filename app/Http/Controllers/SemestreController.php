<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSemestreRequest;
use App\Http\Resources\SemestreResource;
use App\Models\Semestre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasRole('Administrador')) {
            abort(403, 'No estas autorizado');
        }

        $callback = Semestre::query()->orderBy('nombre', 'desc');

        $semestres = SemestreResource::collection($callback->get());
        $semestre_activo = SemestreResource::make($callback->where('esta_activo', true)->first());
        return inertia('Admin/Semestre/Index', compact('semestres', 'semestre_activo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Admin/Semestre/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSemestreRequest $request)
    {
        try {
            $fecha_inicio = Carbon::parse($request->fecha_inicio);
            $exists = Semestre::query()->where('nombre', $request->anio . '-' . $request->semestre)->first();
            $fecha_fin_semestre_anterior = Semestre::query()->orderBy('nombre', 'desc')->first()->fecha_fin;

            if ($exists) {
                $request->session()->flash('flash.banner', 'El semestre académico ' . $request->anio . '-' . $request->semestre . ' ya está creado.');
                $request->session()->flash('flash.bannerStyle', 'danger');
                return redirect()->back();
            }
            if ($fecha_inicio <= $fecha_fin_semestre_anterior) {
                $request->session()->flash('flash.banner', 'La fecha de inicio del presente semestre debe ser mayor a la fecha fin del semestre anterior (' . $fecha_fin_semestre_anterior->format('d M, Y') . ')');
                $request->session()->flash('flash.bannerStyle', 'danger');
                return redirect()->back();
            }

            $diferencia_en_semanas = $fecha_inicio->diffInWeeks($request->fecha_fin);
            $difference_weeks = false;
            if ($request->semestre == 0) {
                if ($diferencia_en_semanas > 7 && $diferencia_en_semanas < 9) {
                    $difference_weeks = true;
                } else {
                    $request->session()->flash('flash.banner', 'El semestre académico de nivelación comprende entre 7 a 9 semanas. Verifique las fechas.');
                    $request->session()->flash('flash.bannerStyle', 'danger');
                    return redirect()->back();
                }
            } elseif ($request->semestre == 1 or $request->semestre == 2) {
                if ($diferencia_en_semanas > 15 && $diferencia_en_semanas < 17) {
                    $difference_weeks = true;
                } else {
                    $request->session()->flash('flash.banner', 'El semestre académico regular comprende entre 15 a 17 semanas. Verifique las fechas.');
                    $request->session()->flash('flash.bannerStyle', 'danger');
                    return redirect()->back();
                }
            } else {
                $request->session()->flash('flash.banner', 'Los semestres académicos se dividen por año en: 0 de nivelación, 1 y 2 de ciclo regular');
                $request->session()->flash('flash.bannerStyle', 'danger');
                return redirect()->back();
            }

            if ($difference_weeks) {
                Semestre::create([
                    'nombre' => $request->anio . '-' . $request->semestre,
                    'fecha_inicio' => $request->fecha_inicio,
                    'fecha_fin' => $request->fecha_fin
                ]);

                $request->session()->flash('flash.banner', 'El semestre académico ' . $request->anio . '-' . $request->semestre . ' se registró correctamente.');
                $request->session()->flash('flash.bannerStyle', 'success');
                return redirect()->route('admin.semestre.index');
            }
        } catch (Exception $e) {
            $request->session()->flash('flash.banner', 'Hubo un error inesperado: \n' . $e);
            $request->session()->flash('flash.bannerStyle', 'danger');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Semestre::where('id', '<>', $id)->update(['esta_activo' => false]);
        Semestre::where('id', '=', $id)->update(['esta_activo' => true]);
        return redirect()->route('admin.semestre.index');
    }
}
