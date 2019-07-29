<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function index(){

    	return view('reportes');
    }

    /*
    public function __construct()
	{
    	$this->middleware('auth');
	}*/

    public function general(Request $request){

    	$estudiantesGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->count();

    	$estudiantesGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->count();


    	$hombresGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idGenero',1)->count();

    	$mujeresGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idGenero',2)->count();


    	return response()
            ->json(['estudiantesGraduadosIngenieria' => $estudiantesGraduadosIngenieria,
            	'estudiantesGraduadosTecnologia' => $estudiantesGraduadosTecnologia,
            	'estudiantesGraduadosHombresIngenieria' => $hombresGraduadosIngenieria,
            	'estudiantesGraduadosMujeresIngenieria' => $mujeresGraduadosIngenieria,
        		]);
    }
}
