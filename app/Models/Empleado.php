<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'correo',
        'identificacion',
        'servicio',
        'dependencia_id',
        'activo'
    ];

    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }

    public function encuestas()
    {
        return $this->hasMany(Encuesta::class);
    }
}
