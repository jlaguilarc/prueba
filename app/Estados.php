<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'Estado';
	protected $primaryKey = 'idEstado';
	public $incrementing = false;
	public $timestamps = false;

	public function estudiantes()
    {
        return $this->hasMany('App\Estudiantes','idEstudiante','idEstudiante');
    }
}
