<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'Genero';
	protected $primaryKey = 'idGenero';
	public $incrementing = false;
	public $timestamps = false;

	public function estudiantes()
    {
        return $this->hasMany('App\Estudiantes','idEstudiante','idEstudiante');
    }
}