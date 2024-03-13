<?php

namespace App\Models;

use App\Http\Controllers\AuxiliarController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'usuario_id',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'observaciones'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function getFechaAttribute()
    {
        return AuxiliarController::formatoFecha($this->created_at);
    }
}
