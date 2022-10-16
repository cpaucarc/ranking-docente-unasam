<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsuarioResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!Auth::user()->hasRole('Administrador')) {
            abort(403, 'No estas autorizado');
        }

        $nombre = $request->has("nombre") ? $request->nombre : null;
        $estado = $request->has("estado") ? $request->estado : "activos";
        $rol = $request->has("rol") ? $request->rol : "con_roles";

        $usuarios = User::query()->with('roles', 'persona');

        if ($nombre) {
            $usuarios = $usuarios->where(function ($query) use ($nombre) {
                $query->where('name', 'LIKE', '%' . $nombre . '%')
                    ->orWhere('username', 'LIKE', '%' . $nombre . '%')
                    ->orWhereIn("persona_id", function ($query2) use ($nombre) {
                        $query2->select('id')->from('personas')
                            ->where('dni', 'LIKE', '%' . $nombre . '%')
                            ->orWhere('apellidos', 'LIKE', '%' . $nombre . '%')
                            ->orWhere('nombres', 'LIKE', '%' . $nombre . '%');
                    });
            });
        }

        if ($rol !== "todos") {
            if ($rol === "sin_roles") {
                $usuarios = $usuarios->whereNotIn('id', function ($query) {
                    $query->select('model_id')->from('model_has_roles');
                });
            } else {
                if ($rol === "con_roles") {
                    $usuarios = $usuarios->whereIn('id', function ($query) {
                        $query->select('model_id')->from('model_has_roles');
                    });
                } else {
                    $usuarios = $usuarios->whereIn("id", function ($query) use ($rol) {
                        $query->select('model_id')->from('model_has_roles')->where("role_id", $rol);
                    });
                }
            }
        }

        if ($estado !== "todos") {
            $usuarios = $usuarios->where("esta_activo", $estado === "activos");
        }



        $usuarios = $usuarios->orderBy('name')->paginate(15)->withQueryString()->through(fn($user) => new UsuarioResource($user));

        $user_roles = Role::query()->pluck('name', 'id');
        $filters = ['nombre' => $nombre, 'rol' => $rol, 'estado' => $estado];
        return inertia('Admin/Usuario/Index', compact('usuarios', 'user_roles', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
