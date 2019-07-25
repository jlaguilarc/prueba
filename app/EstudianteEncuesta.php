<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudianteEncuesta extends Model
{
    protected $table = 'Estudiante_Encuesta';
	protected $primaryKey = array('idEstudiante,idEncuesta,idPregunta');
	public $incrementing = false;
	public $timestamps = false;
}
