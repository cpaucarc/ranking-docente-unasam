<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    use HasFactory;

    protected $table = "tesis";
    protected $guarded = ['id'];
    public $timestamps = false;
    public $casts = [
        "fecha_registro" => "date",
        "fecha_validacion" => "date",
    ];
}
