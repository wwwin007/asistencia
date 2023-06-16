<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }

    public function codigo(){
        return $this->belongsTo(Codigo::class);
    }
}
