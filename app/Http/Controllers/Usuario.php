<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function validar(Request $request){


    	$usuario = \App\Usuario::where([
		    ['username', '=', $request->input("username")],
		    ['pass', '=', $request->input("password")]
		])->firstOrFail();

    	return redirect('/home');

    }
}
