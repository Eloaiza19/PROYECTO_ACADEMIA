<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nombre', 'description', 'duration', 'image'];
    use HasFactory;

    //Relación uno a muchos
    public function subjects(){
        return $this->hasMany(Materia::class);
    }

    public function students(){
        return $this->hasMany(Estudiante::class);
    }

}
