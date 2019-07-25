<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPrograma extends Model
{
    protected $table = 'Tipo_Programa';
	protected $primaryKey = 'idTipo';
	public $incrementing = true;
	public $timestamps = false;

	public function programa()
    {
        return $this->hasMany('App\Programas','idPrograma','idPrograma');
    }
}
