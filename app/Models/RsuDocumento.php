<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RsuDocumento extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
    public $casts = ['fecha_validacion' => 'date'];
}
