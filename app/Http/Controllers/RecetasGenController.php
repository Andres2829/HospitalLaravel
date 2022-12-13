<?php

namespace App\Http\Controllers;
use App\Models\Pacientes;
use App\Models\RecetasGen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RecetasGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,RecetasGen $receta)
    {
        $datos = request()->validate([
            
            'paciente_idR' => ['required'],
            'fecha' => ['required'],
            'receta' => ['required'],
            'indicaciones' => ['required']
           

        ]);

        $receta = RecetasGen::create([
            
            'paciente_idR'=>$datos["paciente_idR"],
            'fecha'=>$datos["fecha"],
            'receta'=>$datos["receta"],
            'indicaciones'=>$datos["indicaciones"]
            
            
            
        ]);

        DB::table('receta')->where('id', $receta["id"])->update([
            'fecha' => $datos["fecha"],
        'receta' => $datos["receta"],
        'indicaciones' => $datos["indicaciones"]]);

        return redirect('PacientesGen')->with('Agregado', 'Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecetasGen  $recetasGen
     * @return \Illuminate\Http\Response
     */
    public function show(RecetasGen $recetasGen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecetasGen  $recetasGen
     * @return \Illuminate\Http\Response
     */
    public function edit(RecetasGen $recetasGen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecetasGen  $recetasGen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecetasGen $recetasGen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecetasGen  $recetasGen
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecetasGen $recetasGen)
    {
        //
    }
}
