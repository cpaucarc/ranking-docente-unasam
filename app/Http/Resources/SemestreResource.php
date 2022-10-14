<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SemestreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nombre" => $this->nombre,
            "fecha_inicio" => $this->fecha_inicio,
            "fecha_inicio_dMY" => $this->fecha_inicio->format('d M, Y'),
            "fecha_fin" => $this->fecha_fin,
            "fecha_fin_dMY" => $this->fecha_fin->format('d M, Y'),
            "esta_activo" => boolval($this->esta_activo),
            "semanas" => floor($this->fecha_inicio->diff($this->fecha_fin)->days / 7),
            "activable" => $this->fecha_inicio > now() && $this->fecha_fin > now(),
        ];
    }
}
