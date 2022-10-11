<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
    public $casts = ['fecha_inicio' => 'date', 'fecha_fin' => 'date'];
}
