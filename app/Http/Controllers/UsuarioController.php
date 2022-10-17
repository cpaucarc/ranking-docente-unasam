<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use App\Http\Resources\UsuarioResource;
use App\Models\Docente;
use App\Models\User;
use App\Models\Validador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response|\Inertia\ResponseFactory
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function show($id)
    {
        if (!Auth::user()->hasRole('Administrador')) {
            abort(403, 'No está autorizado');
        }

        $data = User::query()->with('roles', 'persona')->where('id', $id)->first();
        $usuario = UsuarioResource::make($data);

        $roles_permitidos = [1, 2, 3]; // 1:admin, 2:validador, 3:docente

        $es_validador = Validador::query()->where('user_id', $data->id)->exists();

        if ($es_validador)
            $roles_permitidos[] = 2; // 2: validador

        $es_docente = Docente::query()->where('persona_id', function ($query) use ($data) {
            $query->select('persona_id')->from('users')->where('id', $data->id);
        })->exists();

        if ($es_docente)
            $roles_permitidos[] = 3; // 3: docente


        $roles_sin_asignar = Role::query()
            ->whereIn('id', $roles_permitidos)
            ->whereNotIn('id', $usuario->roles->pluck('id'))
            ->orderBy('name')
            ->get();
        $roles_sin_asignar = RoleResource::collection($roles_sin_asignar);
        return inertia('Admin/Usuario/Show', compact('usuario', 'roles_sin_asignar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->esta_activo = !$usuario->esta_activo;
        $usuario->save();
        return redirect()->back();
    }
}
