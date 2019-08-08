<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class EncuestaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	return view('encuesta');
    }

    public function preguntas(Request $request){

    	$cedula = $request->input('cedula');
        $fecha_expedicion = $request->input('expedicion');

        $date = Carbon::createFromDate($fecha_expedicion);

        $fecha_formateada = $date->format('Y-m-d');

    	$usuario = \App\Estudiantes::where('idEstudiante',$cedula)->where('fecha_expedicion',$fecha_formateada)->exists();

     
        if(!$usuario){
            return redirect('/encuesta')->with('error','Fecha de Expedición o Cédula Incorrecta');
        }

    	$categorias = \App\Categorias::all();

        $programas = \App\Programas::all();

        $estados = \App\Estados::all();

        $usuario = \App\Estudiantes::where('idEstudiante',$cedula)->get();


    	return view('preguntas',[
	        'usuario' => $usuario,
	        'categorias' => $categorias,
            'programas' => $programas,
            'estados' => $estados
	    ]);
    }

    public function guardar(Request $request){


        $estudiante = \App\Estudiantes::find($request->input("cedula"));

        $estudiante->correo = $request->input("correo");

        $estudiante->nombre = $request->input("nombre");

        $estudiante->idEstudiante = $request->input("cedula");

        $estudiante->telefono = $request->input("telefono");

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
