<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'Estudiante';
	protected $primaryKey = 'idEstudiante';
	public $incrementing = false;
	public $timestamps = false;

	public function programa()
    {
        return $this->belongsTo('App\Programas','idPrograma','idPrograma');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estados','idEstado','idEstado');
    }

}
