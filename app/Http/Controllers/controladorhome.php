<?php

namespace App\Http\Controllers;

//use DB;

use App\Project;
use Illuminate\Http\Request;

class controladorhome extends Controller
{
    /**
     *  Handle the incoming request.
     *
     *  @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datos1 = array (
            'Jose' => 'Azul',
            'Kevon' => 'Verde',
            'Bryan' => 'Negro',
            'Mariela' => 'Rojo',
        );

        $datos = [
            ['title' => 'Dato 1'],
            ['title' => 'Dato 2'],
            ['title' => 'Dato 3'],
            ['title' => 'Dato 4'],
        ];

        //uso de Base de Datos
        //$datos3 = DB::table('projects')->get();
        $datos3 = Project::paginate(2);
        //orderBy('created_at','DESC') Muestra los ultimos en la primera parte
        //latest() lo mismo
        //latest()->paginate(cantidad de regsitros a mostrar) paginacion de los registros
        return view('/home', compact('datos', 'datos1', 'datos3'));
    }
}
