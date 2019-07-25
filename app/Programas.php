<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    protected $table = 'Programa';
	protected $primaryKey = 'idPrograma';
	public $incrementing = true;
	public $timestamps = false;

	public function estudiantes()
    {
        return $this->hasMany('App\Estudiantes','idEstudiante','idEstudiante');
    }

    public function tipoPrograma()
    {
        return $this->belongsTo('App\TipoPrograma','idTipo','idTipo');
    }
}
