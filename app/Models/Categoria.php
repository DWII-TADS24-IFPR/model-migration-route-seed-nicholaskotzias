<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nome', 'maximo_horas', 'curso_id'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
