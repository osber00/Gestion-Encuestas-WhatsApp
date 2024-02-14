<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['telefono'];

    public function encuestas()
    {
        return $this->hasMany(Encuesta::class);
    }
}
