<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'Categoria';
	protected $primaryKey = 'idCategoria';
	public $incrementing = false;
	public $timestamps = false;

	public function preguntas()
    {
        return $this->hasMany('App\Preguntas','idCategoria','idCategoria');
    }
}
