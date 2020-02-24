<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;


class EncuestaController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }
    public function index(){
    	return view('encuesta');
    }

    public function preguntas(Request $request){

    	$cedula = $request->input('cedula');
        //$fecha_expedicion = $request->input('expedicion');

        //hjkhkdhkajshdjkashdjkh
        $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'http://uts.edu.co/portal/consultas/frontend/web/index.php/site',
        // You can set any number of default request options.
        'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', "index?documento={$cedula}");

        $posts = json_decode($response->getBody()->getContents());
        //jhjkhjhjh

        //$date = Carbon::createFromDate($fecha_expedicion);

        //$fecha_formateada = $date->format('Y-m-d');

    	//$usuario = \App\Estudiantes::where('idEstudiante',$cedula)->where('fecha_expedicion',$fecha_formateada)->exists();

     
        if($posts->resultado==0){
            return redirect('/encuesta')->with('error','Fecha de Expedición o Cédula Incorrecta');
        }

    	$categorias = \App\Categorias::all();

        $programas = \App\Programas::all();

        $estados = \App\Estados::all();

        $genero = \App\Genero::all();

        //$usuario = \App\Estudiantes::where('idEstudiante',$cedula)->get();


    	return view('preguntas',[
	        'post' => $posts,
	        'categorias' => $categorias,
            'programas' => $programas,
            'estados' => $estados,
            'genero' => $genero
	    ]);
    }

    public function guardar(Request $request){


        //$estudiante = \App\Estudiantes::find($request->input("cedula"));

        $estudiante = new \App\Estudiantes();

        $estudiante->correo = $request->input("correo");

        $estudiante->nombre = $request->input("nombre");

        $estudiante->idEstudiante = $request->input("cedula");

        $estudiante->celular = $request->input("telefono");

        $estudiante->idEstado = $request->input("idEstado");

        $estudiante->idPrograma = $request->input("idPrograma");

        $estudiante->save();

        foreach($request->all() as $llave => $valor){

            if(gettype($llave) == "integer"){

                $estudianteEncuesta = new \App\EstudianteEncuesta();

                $estudianteEncuesta->idEstudiante = $request->input("cedula");

                $estudianteEncuesta->idEncuesta = 1;
                $estudianteEncuesta->idPregunta = $llave;
                $estudianteEncuesta->respuesta = $valor;
                $estudianteEncuesta->fecha = date('Y-m-d');
                $estudianteEncuesta->save();

            }

        }

        return redirect('/encuesta');
    }
}
