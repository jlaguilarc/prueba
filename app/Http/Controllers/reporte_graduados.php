<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class reporte_graduados extends Controller
{
    public function index(){
    	//return view('encuesta');
    	$pastel = DB::select("SELECT count(DISTINCT(e.idEstudiante)) as Graduados,tp.descripcion FROM Estado es,Estudiante e,Programa p, Tipo_Programa tp WHERE es.idEstado = es.idEstado and e.idPrograma = p.idPrograma and p.idTipo = tp.idTipo and e.idEstado='3' GROUP BY tp.descripcion ");


    	return view('reporte_graduados',['pastel'=>$pastel]);
    }
    
}
