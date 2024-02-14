<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'slug'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
