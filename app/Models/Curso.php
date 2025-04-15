<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['nome', 'sigla', 'total_horas'];

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }

    public function categorias(){
        return $this->hasMany(Categoria::class);
    }
}
