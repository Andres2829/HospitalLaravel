<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use App\Models\Signos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SignosController extends Controller
{
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
      
       
     return view('modulos.PacientesSig')->with('pacientes', $pacientes); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Signos $signos)
    {
        $datos = request()->validate([
            
            'paciente_id' => ['required'],
            'fecha' => ['required'],
            'mot_consulta' => [''],
            'ant_pato_personales' => [''],
            'ant_gine_obstetrico' => [''],
            'exa_fisicos' => [''],
            'diagnostico' => [''],
            'tratamiento' => [''],
            'fecha_signos' => ['required'],
            'edad' => ['required'],
            'temperatura' => ['required'],
            'pulso' => ['required'],
            'presion' => ['required'],
            'peso' => ['required'],
            'talla' => ['required'],
            'saturacion_oxigeno' => ['required'],
            'evolucion' => ['required'],
            'fechacov' => [''],
            'covidsi' => [''],
            'covidno' => [''],
            'c' => ['']
            
            


        ]);

        $signos = Signos::create([
            
            'paciente_id'=>$datos["paciente_id"],
            'fecha'=>$datos["fecha"],
            'mot_consulta'=>$datos["mot_consulta"],
            'ant_pato_personales'=>$datos["ant_pato_personales"],
            'ant_gine_obstetrico'=>$datos["ant_gine_obstetrico"],
            'exa_fisicos'=>$datos["exa_fisicos"],
            'diagnostico'=>$datos["diagnostico"],
            'tratamiento'=>$datos["tratamiento"],
            'fecha_signos'=>$datos["fecha_signos"],
            'edad'=>$datos["edad"],
            'temperatura'=>$datos["temperatura"],
            'pulso'=>$datos["pulso"],
            'presion'=>$datos["presion"],
            'peso'=>$datos["peso"],
            'talla'=>$datos["talla"],
            'saturacion_oxigeno'=>$datos["saturacion_oxigeno"],
            'evolucion'=>$datos["evolucion"],
            'fechacov'=>$datos["fechacov"],

            'covidsi'=>$datos['covidsi'],
            'covidno'=>$datos['covidno'],
            'c'=>$datos['c']

            
        ]);

        DB::table('signos')->where('id', $signos["id"])->update(['fecha' => $datos["fecha"],
        'mot_consulta' => $datos["mot_consulta"],'ant_pato_personales' => $datos["ant_pato_personales"],
        'ant_gine_obstetrico' => $datos["ant_gine_obstetrico"],
        'exa_fisicos' => $datos["exa_fisicos"],'diagnostico' => $datos["diagnostico"],
        'tratamiento' => $datos["tratamiento"],'fecha_signos' => $datos["fecha_signos"],
        'edad' => $datos["edad"],'temperatura' => $datos["temperatura"],'pulso' => $datos["pulso"],
        'presion' => $datos["presion"],'peso' => $datos["peso"],'talla' => $datos["talla"],
        'saturacion_oxigeno' => $datos["saturacion_oxigeno"],'evolucion' => $datos["evolucion"],
        'fechacov' => $datos["fechacov"],'covidsi' => $datos["covidsi"],
        'covidno' => $datos["covidno"],'c' => $datos["c"]]);

        return redirect('PacientesSig')->with('Agregado', 'Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Signos  $signos
     * @return \Illuminate\Http\Response
     */
    public function show(Signos $signos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Signos  $signos
     * @return \Illuminate\Http\Response
     */
    public function edit( Signos $signos)
    {

        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');
            

        }
        $signos = DB::select('select * from signos');
        // $paciente = Pacientes::find($id->id);
        
        // $signos = Signos::select('select * from signos');
        

        return view('modulos.Editar-PacienteSig');
    }

    public function edit2(Pacientes $id)
    {

        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        $paciente = Pacientes::find($id->id);

        return view('modulos.Editar-PacienteSig')->with('paciente', $paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Signos  $signos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signos $signos,Pacientes $paciente)
    {
        $datos = request()->validate([

            'temperatura' => ['required']
        ]);

        
        DB::table('signos')->where('paciente_id', $paciente["id"])->update(['temperatura' => $datos["temperatura"]]);

        return redirect('Pacientes')->with('actualizadoP', 'Si');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Signos  $signos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signos $signos)
    {
       
    }
} 
