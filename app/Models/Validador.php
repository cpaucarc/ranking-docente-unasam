<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validador extends Model
{
    use HasFactory;

    protected $table = "validadores";
    protected $guarded = ['id'];
    public $timestamps = false;
}
