<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
	
    public function inicio(Request $request){

		if (Auth::check()) {

			return redirect('/encuesta');
		}

		else {
			return view('login');
		}
		
		
	}
	
	public function administrativo(){
		return view('/administrativo');
	}
}
