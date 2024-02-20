<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dependencia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'slug'];

    protected $withCount = ['empleados','empleados_activos'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    public function empleados_activos()
    {
        return $this->hasMany(Empleado::class)->where('activo',true);
    }
}
