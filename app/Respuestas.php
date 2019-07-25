<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $table = 'Respuesta';
	protected $primaryKey = 'idRespuesta';
	public $incrementing = false;
	public $timestamps = false;

	public function preguntas()
    {
        return $this->belongsTo('App\Preguntas','idPregunta','idRespuesta');
    }
}
