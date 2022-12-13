<?php

namespace App\Http\Controllers;

use App\Models\MedicinaGen;
use App\Models\Pacientes;
use App\Models\Receta;
use App\Models\Doctores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MedicinaGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }
        $pacientes = DB::select('select * from users where rol = "Paciente"');
      
       
     return view('modulos.PacientesGen')->with('pacientes', $pacientes); 
    }

    public function index2(Pacientes $id)
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        $paciente = Pacientes::find($id->id);

        return view('modulos.Certificados')->with('paciente', $paciente);
        
    }

    public function index3(Pacientes $id)
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        $paciente = Pacientes::find($id->id);

        return view('modulos.RecetaMed')->with('paciente', $paciente);
    }



    // Laboratorio 
    public function index4()
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }
        $pacientes = DB::select('select * from users where rol = "Paciente"');
      
       
        return view('modulos.Laboratorio')->with('pacientes', $pacientes); 
    }

    public function index5(Pacientes $id)
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }
        $paciente = Pacientes::find($id->id);
        
        
       
        return view('modulos.Laboratorio_Receta')->with('paciente', $paciente);
    }

    // fin laboratorio  

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
    public function store(Request $request,MedicinaGen $certificados)
    {
        $datos = request()->validate([
            
            'paciente_ids' => ['required'],
            'fecha' => ['required'],
            'paciente' => ['required'],
            'cedula' => ['required'],
            'diagnostico' => ['required'],
            'reposo_I' => ['required'],
            'reposo_F' => ['required'],
            'presentar' => ['required']

        ]);

        $certificados = MedicinaGen::create([
            
            'paciente_ids'=>$datos["paciente_ids"],
            'fecha'=>$datos["fecha"],
            'paciente'=>$datos["paciente"],
            'cedula'=>$datos["cedula"],
            'diagnostico'=>$datos["diagnostico"],
            'reposo_I'=>$datos["reposo_I"],
            'reposo_F'=>$datos["reposo_F"],
            'presentar'=>$datos["presentar"]
            
            
        ]);

        DB::table('certificadomed')->where('id', $certificados["id"])->update(['fecha' => $datos["fecha"],'paciente' => $datos["paciente"],'cedula' => $datos["cedula"],'diagnostico' => $datos["diagnostico"],'reposo_I' => $datos["reposo_I"],'reposo_F' => $datos["reposo_F"],'presentar' => $datos["presentar"]]);

        return redirect('PacientesGen')->with('Agregado', 'Si');
    }






// receta de doctores


    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicinaGen  $medicinaGen
     * @return \Illuminate\Http\Response
     */
    public function show(MedicinaGen $medicinaGen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicinaGen  $medicinaGen
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicinaGen $medicinaGen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicinaGen  $medicinaGen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicinaGen $medicinaGen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicinaGen  $medicinaGen
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicinaGen $medicinaGen)
    {
        //
    }
}
