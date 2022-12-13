<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use App\Models\Signos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){ /* autenticacion*/

            return redirect('Inicio');/* retornadndo inicio*/


        }

        $paciente = DB::select('select * from users where rol = "Paciente"');

        return view('modulos.Pacientes')->with('pacientes', $paciente);

    }

    public function index2()
    {
        
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){ /* autenticacion*/

            return redirect('Inicio');/* retornadndo inicio*/

        }

        $pacientes = DB::select('select * from users where rol = "Paciente"'); /* enviando datos de pacientes*/
       

        return view('modulos.PacientesSig')->with('pacientes', $pacientes); /* enviar datos de tablas*/


    }
/* medico general*/

    
    public function create()
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        return view('modulos.Crear-Paciente');
    }


    
  
    public function store(Request $request)
    {
       
       $datos = request()->validate([

            'name' => ['required'],
            'documento' => ['required'],
            'telefono'=>['required'],
            'sexo'=>['required'],
            'password' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'direccion'=>['required'],
           'fecha_nacimiento'=>['required'],
           'fecha_inscripcion'=>['required'],
           'ocupacion'=>['required'],
           'estadoc'=>['required'],
           'provincia'=>['required'],
           'canton'=>['required'],
           'parroquia'=>['required'],
           'domicilio'=>['required'],

       
          
        ]);

        

        Pacientes::create([

            'name'=>$datos['name'],
            'id_consultorio'=>0,
            'email'=>$datos['email'],
            'documento'=>$datos['documento'],
            'telefono'=>$datos['telefono'],
            'sexo'=>$datos['sexo'],
            'rol'=>'Paciente',
            'password'=>Hash::make($datos['password']),
            'direccion'=>$datos['direccion'],
            'fecha_nacimiento'=>$datos['fecha_nacimiento'],
            'fecha_inscripcion'=>$datos['fecha_inscripcion'],
            'ocupacion'=>$datos['ocupacion'],
            'estadoc'=>$datos['estadoc'],
            'provincia'=>$datos['provincia'],
            'canton'=>$datos['canton'],
            'parroquia'=>$datos['parroquia'],
            'domicilio'=>$datos['domicilio']
            

        ]);

        

        

        return redirect('Pacientes')->with('Agregado', 'Si');
    }

   
    
    public function edit(Pacientes $id)
    {

        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        $paciente = Pacientes::find($id->id);

        return view('modulos.Editar-Paciente')->with('paciente', $paciente);

    }

    public function edit2(Pacientes $id)
    {

        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        $paciente = Pacientes::find($id->id);

        return view('modulos.Editar-PacienteSig')->with('paciente', $paciente);
    }

    public function update(Request $request, Pacientes $paciente)
    {

        if($paciente["email"] != request('email') && request('passwordN') != ""){

            $datos = request()->validate([

                'name' => ['required'],
                'documento' => ['required'],
                'telefono'=>['required'],
                'sexo'=>['required'],
                'passwordN' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'unique:users'],
                'direccion' => ['required'],
                'fecha_nacimiento'=>['required'],
                'fecha_inscripcion'=>['required'],
                'ocupacion'=>['required'],
                'estadoc'=>['required'],
                'provincia'=>['required'],
                'canton'=>['required'],
                'parroquia'=>['required'],
                'domicilio'=>['required']
                


            ]);

            DB::table('users')->where('id', $paciente["id"])->update(['name' => $datos["name"], 'email' => $datos["email"], 'documento' => $datos["documento"],'telefono' => $datos["telefono"],'sexo' => $datos["sexo"], 'password' => Hash::make($datos["passwordN"]),'direccion' => $datos["direccion"],'fecha_nacimiento' => $datos["fecha_nacimiento"],'fecha_inscripcion' => $datos["fecha_inscripcion"],'ocupacion' => $datos["ocupacion"],'estadoc' => $datos["estadoc"],'provincia' => $datos["provincia"],'canton' => $datos["canton"],'parroquia' => $datos["parroquia"],'domicilio' => $datos["domicilio"]]);

        }else if($paciente["email"] != request('email') && request('passwordN') == ""){

            $datos = request()->validate([

                'name' => ['required'],
                'documento' => ['required'],
                'telefono'=>['required'],
                'sexo'=>['required'],
                'password' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'unique:users'],
                'direccion' => ['required'],
                'fecha_nacimiento'=>['required'],
                'fecha_inscripcion'=>['required'],
                'ocupacion'=>['required'],
                'estadoc'=>['required'],
                'provincia'=>['required'],
                'canton'=>['required'],
                'parroquia'=>['required'],
                'domicilio'=>['required']


            ]);

            DB::table('users')->where('id', $paciente["id"])->update(['name' => $datos["name"], 'email' => $datos["email"], 'documento' => $datos["documento"],'telefono' => $datos["telefono"],'sexo' => $datos["sexo"], 'password' => Hash::make($datos["password"]),'direccion' => $datos["direccion"],'fecha_nacimiento' => $datos["fecha_nacimiento"],'fecha_inscripcion' => $datos["fecha_inscripcion"],'ocupacion' => $datos["ocupacion"],'estadoc' => $datos["estadoc"],'provincia' => $datos["provincia"],'canton' => $datos["canton"],'parroquia' => $datos["parroquia"],'domicilio' => $datos["domicilio"]]);

        }else if($paciente["email"] == request('email') && request('passwordN') != ""){

            $datos = request()->validate([

                'name' => ['required'],
                'documento' => ['required'],
                'telefono'=>['required'],
                'sexo'=>['required'],
                'passwordN' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email'],
                'direccion' => ['required'],
                'fecha_nacimiento'=>['required'],
                'fecha_inscripcion'=>['required'],
                'ocupacion'=>['required'],
                'estadoc'=>['required'],
                'provincia'=>['required'],
                'canton'=>['required'],
                'parroquia'=>['required'],
                'domicilio'=>['required']


            ]);

            DB::table('users')->where('id', $paciente["id"])->update(['name' => $datos["name"], 'email' => $datos["email"], 'documento' => $datos["documento"], 'telefono' => $datos["telefono"],'sexo' => $datos["sexo"],'password' => Hash::make($datos["passwordN"]),'direccion' => $datos["direccion"],'fecha_nacimiento' => $datos["fecha_nacimiento"],'fecha_inscripcion' => $datos["fecha_inscripcion"],'ocupacion' => $datos["ocupacion"],'estadoc' => $datos["estadoc"],'provincia' => $datos["provincia"],'canton' => $datos["canton"],'parroquia' => $datos["parroquia"],'domicilio' => $datos["domicilio"]]);

        }else{

            $datos = request()->validate([

                'name' => ['required'],
                'documento' => ['required'],
                'telefono'=>['required'],
                'sexo'=>['required'],
                'password' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email'],
                'direccion' => ['required'],
                'fecha_nacimiento'=>['required'],
                'fecha_inscripcion'=>['required'],
                'ocupacion'=>['required'],
                 'estadoc'=>['required'],
           'provincia'=>['required'],
           'canton'=>['required'],
           'parroquia'=>['required'],
           'domicilio'=>['required']


            ]);

            DB::table('users')->where('id', $paciente["id"])->update(['name' => $datos["name"], 'email' => $datos["email"], 'documento' => $datos["documento"],'telefono' => $datos["telefono"],'sexo' => $datos["sexo"], 'password' => Hash::make($datos["password"]),'direccion' => $datos["direccion"],'fecha_nacimiento' => $datos["fecha_nacimiento"],'fecha_inscripcion' => $datos["fecha_inscripcion"],'ocupacion' => $datos["ocupacion"],'estadoc' => $datos["estadoc"],'provincia' => $datos["provincia"],'canton' => $datos["canton"],'parroquia' => $datos["parroquia"],'domicilio' => $datos["domicilio"]]);

        }

        return redirect('Pacientes')->with('actualizadoP', 'Si');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Pacientes::destroy($id);

        return redirect('Pacientes');

    }
}
