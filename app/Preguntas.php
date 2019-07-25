<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $table = 'Pregunta';
	protected $primaryKey = 'idPregunta';
	public $incrementing = false;
	public $timestamps = false;

	public function respuestas()
    {
        return $this->hasMany('App\Respuestas','idPregunta','idPregunta');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categorias','idCategoria','idCategoria');
    }
}
