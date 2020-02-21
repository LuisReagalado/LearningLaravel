<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }


    public function index(){
        return view('/projects.index',[
            'projects'=> Project::latest()->paginate()
        ]);
    }


    public function show(Project $project){
        return view('projects.show',[
            'project'=> $project
        ]);
    }


    public function create(){
        return view('projects.create',[
            'project' => new Project
        ]);
    }


    public function store(SaveProjectRequest $request){
        Project::create($request->validated());
        return redirect()->route('Projects.index')->with('status','El proyecto fue creado cone exito');
    }


    public function edit(Project $project){
        return view('Projects.edit',[
            'project'=> $project
        ]);
    }


    public function update(Project $project,SaveProjectRequest $request){
        $project->update($request->validated());
        return redirect()->route('Projects.show',$project)->with('status','El proyecto se actualizo bro');
    }


    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('Projects.index')->with('status','El proyecto se elimino');
    }
}
