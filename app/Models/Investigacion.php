<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    use HasFactory;

    protected $table = "investigaciones";
    protected $guarded = ['id'];
    public $timestamps = false;
    public $casts = [
        "fecha_inicio" => "date",
        "fecha_fin" => "date",
        "fecha_publicacion" => "date",
        "fecha_registro" => "date",
        "fecha_validacion" => "date",
    ];
}
