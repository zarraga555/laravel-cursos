<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function __construct()
    {
        //except lo que hara es que todas las rutas seleccionadas
        //estaran disponible a los invitados y las demas rutas necesitran logearse
        $this->middleware('auth')->except('index', 'show');
        //$this->middleware('auth')->only('create');
        //Only protegera o pedirar auntenticacion a las rutas que seleccionamos
    }
    public function index(){
        // $portafolio = Project::paginate(2);
        // return view('portafolio', compact('portafolio'));
        return view('portafolio', [
            'projects' => Project::paginate(2),
        ]);
    }
    //cuando usamos route model bindig al igual al usar el metodo findOrFail, trabaja de la
    //misma manera
    public function show(Project $project){
        //Reotna la vista
        return view('portafolio.show', [
        //  project es la variable que se manda
            'project' => $project
        ]);
    }
    public function create(){
        return view('portafolio.create', [
            'project' => new Project
            //Lo que va hacer es mandar un nuevo proyecto pero vacio
            //esto es para poder reutilizar el formulario
        ]);
    }
    public function store(ProjectRequest $request) {
        Project::create([
            //Variables enviadas al forma se guardaran en las variables declaradas e insertadas
            //en la columna de la base de datos
            'title' => request('title'),
            'description' => request('description'),
            //Para la realiazcion de la validacion de datos y no tener problemas
            //Creamos un archivo de tipo Request
            $request->validated()
        ]);
        //Usamos with para mandar un paramentro donde mostrara ese mensaje una vez agegado
        //el archivo este metodo lo usaremos en update y destroy
        return redirect()->route('portafolio.index')->with('status', 'El proyecto fue creado con exito');
    }
    public function edit(Project $project){
        return view('portafolio.edit', [
            'project' => $project,
        ]);
    }
    public function update(Project $project, ProjectRequest $request){
        $project->update([
            'title' => request('title'),
            'description' => request('description'),
            $request->validated()
        ]);
        //Usamos with para mandar un paramentro donde mostrara ese mensaje una vez agegado
        //el archivo este metodo lo usaremos en update y destroy
        return redirect()->route('portafolio.index')->with('status', 'El proyecto fue actualizado con exito');
    }
    public function destroy(Project $project){
        $project->delete();
        //Usamos with para mandar un paramentro donde mostrara ese mensaje una vez agegado
        //el archivo este metodo lo usaremos en update y destroy
        return redirect()->route('portafolio.index')->with('status', 'El proyecto fue eliminado con exito');
    }

}
