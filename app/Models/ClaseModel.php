<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaseModel extends Model
{
    protected $table = 'clase';
    protected $fillable = [
        'ciclo',
        'carrera',
        'curso',
        'nombre_clase',
        'descripcion_clase',
    ];



}
