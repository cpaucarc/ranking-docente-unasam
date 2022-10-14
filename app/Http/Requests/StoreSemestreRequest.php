<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSemestreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "anio" => ["required", "string", "max:4", "min:4"],
            "semestre" => ["required", "string", "max:1", "min:1"],
            "fecha_inicio" => ["required", "date_format:Y-m-d"],
            "fecha_fin" => ["required", "date_format:Y-m-d", "after:fecha_inicio"],
        ];
    }
}
