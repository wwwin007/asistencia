<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $primaryKey='ci';
    public function asistencia(){
        return $this->hasOne(Asistencia::class);
    }

}
