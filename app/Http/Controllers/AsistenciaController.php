<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Codigo;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Exists;

Use Alert;
class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencias=Asistencia::with('estudiante','codigo')->get();
        return view('asistencias.index',compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes=Estudiante::all();
        return view('asistencias.create',compact('estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'estudiante_ci'=>'required|unique:asistencias,estudiante_ci',
            'x1'=>'required|max:3|min:3',
            'x2'=>'required|max:3|min:3',
            'x3'=>'required|max:3|min:3',
        ]);
       
        $controlar=Asistencia::where("estudiante_ci","=",$request->estudiante_ci)->first();
        
        $codigo=$request->x1.'-'.$request->x2.'-'.$request->x3;
        

        $codigo3=Codigo::where('codigo','=',$codigo)->first();
        if($codigo3==null){
            $codigo4='10000000000000';
        }
        else{
            $codigo4=$codigo3->id;
        }
        $codigo2=Asistencia::where("codigo_id","=",$codigo4)->first();

        
        if($controlar){
              return Redirect::to('asistencia/create')->with('warning', 'estudiante ya registrado');
            

        }
        elseif(!$codigo3){
            return Redirect::to('asistencia/create')->with('warning', 'codigo no existe!');
           
        }
        elseif($codigo2){
            return Redirect::to('asistencia/create')->with('warning', 'codigo ya! registrado');
           
        }
        
        

        try {
            $asistencia=new Asistencia;
            $asistencia->estudiante_ci=$request->estudiante_ci;
            $asistencia->codigo_id=$codigo3->id;
            $asistencia->save();
          } catch (\Exception $e) {
            return Redirect::to('asistencia/create')->with('error', 'no se registro sus asistencia!');;
          }

        return Redirect::to('asistencia')->with('success', 'Asistencia Registrado');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
