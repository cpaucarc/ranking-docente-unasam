<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'profile_photo_url' => $this->profile_photo_url,
            'dni' => $this->persona?->dni,
            'fullname' => $this->persona?->nombre_completo,
            'email' => $this->email,
            'roles' => RoleResource::collection($this->whenLoaded('roles')),
            'esta_activo' => boolval($this->esta_activo),
            'estado' => $this->esta_activo ? 'Activo' : 'Inactivo',
            'created_at' => $this->created_at->diff(now())->days > 5 ? $this->created_at->format('d/m/Y h:ia') : $this->created_at->diffForHumans(),
        ];
    }
}
