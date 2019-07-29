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


		$hombresGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idGenero',1)->count();

    	$mujeresGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idGenero',2)->count();

		
		$sedeBucaramangaGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idSede',1)->count();

		$sedeBucaramangaGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idSede',1)->count();

		
		$sedeBarrancaGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idSede',2)->count();

		$sedeBarrancaGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idSede',2)->count();

		$sedeCucutaGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idSede',3)->count();

		$sedeCucutaGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idSede',3)->count();

		
		$sedePiedecuestaGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idSede',4)->count();

		$sedePiedecuestaGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idSede',4)->count();


		$sedeSanGilGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idSede',5)->count();

		$sedeSanGilGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idSede',5)->count();

		$sedeVelezGraduadosTecnologia = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',2);
			})->where('idEstado',3)->where('idSede',6)->count();

		$sedeVelezGraduadosIngenieria = 

    	\App\Estudiantes::whereHas('programa', function ($query) {
			    $query->where('idTipo',1);
			})->where('idEstado',3)->where('idSede',6)->count();

		

	
    	return response()
            ->json([
				'Ingenieria' => $estudiantesGraduadosIngenieria,
            	'Tecnologia' => $estudiantesGraduadosTecnologia,
            	'Hombres Ingenieria' => $hombresGraduadosIngenieria,
				'Mujeres Ingenieria' => $mujeresGraduadosIngenieria,
				'Hombres Tecnologia' => $hombresGraduadosTecnologia,
				'Mujeres Tecnologia' => $mujeresGraduadosTecnologia,
				'Tecnologia Sede Bucaramanga' => $sedeBucaramangaGraduadosTecnologia,
				'Ingenieria Sede Bucaramanga' => $sedeBucaramangaGraduadosIngenieria,
				'Tecnologia Sede Barrancabermeja' => $sedeBarrancaGraduadosTecnologia,
				'Ingenieria Sede Barrancabermeja' => $sedeBarrancaGraduadosIngenieria,
				'Tecnologia Sede Cúcuta' => $sedeCucutaGraduadosTecnologia,
				'Ingenieria Sede Cúcuta' => $sedeCucutaGraduadosIngenieria,
				'Tecnologia Sede Piedecuesta' => $sedePiedecuestaGraduadosTecnologia,
				'Ingenieria Sede Piedecuesta' => $sedePiedecuestaGraduadosIngenieria,
				'Tecnologia Sede San Gil' => $sedeSanGilGraduadosTecnologia,
				'Ingenieria Sede San Gil' => $sedeSanGilGraduadosIngenieria,
				'Tecnologia Sede Vélez' => $sedeVelezGraduadosTecnologia,
				'Ingenieria Sede Vélez' => $sedeVelezGraduadosIngenieria,
				
        		]);
    }
}
