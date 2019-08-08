<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
	use Notifiable;

	protected $table = 'usuario';
	protected $primaryKey = 'cedula';
	public $incrementing = false;
	public $timestamps = false;

	public function getAuthPassword()
    {
      return $this->pass;
    }


}
