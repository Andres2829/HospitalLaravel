<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\SecretariasController;
use App\Http\Controllers\SignosController;
use App\Http\Controllers\MedicinaGenController;
use App\Http\Controllers\RecetasGenController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ObtetraController;


Route::get('/', function () {
    return view('modulos.iniciop');
});

Route::get('/Seleccionar', function () {
    return view('modulos.Seleccionar');
});

Route::get('/contacto', function () {
    return view('modulos.contacto');
});


Route::get('/Ingresarnew', function () {
    return view('modulos.Ingresarnew');
});


Auth::routes();

Route::get('Inicio', [InicioController::class, 'index']);
Route::get('Mis-Datos', [InicioController::class, 'DatosCreate']);
Route::put('Mis-Datos', [InicioController::class, 'DatosUpdate']);
Route::get('Inicio-Editar', [InicioController::class, 'edit']);
Route::put('Inicio-Editar', [InicioController::class, 'update']);

Route::get('Consultorios', [ConsultoriosController::class, 'index']);
Route::post('Consultorios', [ConsultoriosController::class, 'store']);
Route::put('Consultorio/{id}', [ConsultoriosController::class, 'update']);
Route::delete('borrar-Consultorio/{id}', [ConsultoriosController::class, 'destroy']);

// Ver Consultorios como Paciente
Route::get("Ver-Consultorios", [ConsultoriosController::class, 'verConsultorios']);

Route::get('Doctores', [DoctoresController::class, 'index']);
Route::post('Doctores', [DoctoresController::class, 'store']);
Route::get('Eliminar-Doctor/{id}', [DoctoresController::class, 'destroy']);

// Ver Doctores como Paciente
Route::get('Ver-Doctores/{id}', [DoctoresController::class, 'VerDoctores']);

Route::get('Pacientes', [PacientesController::class, 'index']);

// Route::get('PacientesSig', [PacientesController::class, 'index2']);

Route::get('Crear-Paciente', [PacientesController::class, 'create']);
Route::post('Crear-Paciente', [PacientesController::class, 'store']);

Route::get('Editar-Paciente/{id}', [PacientesController::class, 'edit']);

// Route::get('Editar-PacienteSig/{id}', [PacientesController::class, 'edit2']);

Route::put('actualizar-paciente/{paciente}', [PacientesController::class, 'update']);

Route::get('Eliminar-Paciente/{id}', [PacientesController::class, 'destroy']);

Route::get('Citas/{id}', [CitasController::class, 'index']);
Route::post('Horario', [CitasController::class, 'HorarioDoctor']);
Route::put('editar-horario/{id}', [CitasController::class, 'EditarHorario']);
Route::post('Citas/{id_doctor}', [CitasController::class, 'CrearCita']);
Route::delete('borrar-cita', [CitasController::class, 'destroy']);

// Historial de Citas Paciente
Route::get('Historial', [CitasController::class, 'historial']);

Route::get('Secretarias', [SecretariasController::class, 'index']);
Route::post('Secretarias', [SecretariasController::class, 'store']);
Route::get('Eliminar-Secretaria/{id}', [SecretariasController::class, 'destroy']);
Route::get('Editar-Secretaria/{id}', [SecretariasController::class, 'show']);
Route::put('actualizar-secretaria/{id}', [SecretariasController::class, 'update']);
// signos vitales

// Route::get('Signos',[SignosController::class,'index']);
Route::get('PacientesSig',[SignosController::class,'index']);

// Route::get('Editar-PacienteSig/{id}', [SignosController::class, 'edit']);
Route::get('Editar-PacienteSig/{id}', [SignosController::class, 'edit2']);

Route::put('actualizar-pacienteSig/{paciente}', [SignosController::class, 'store']);

// medicina general

Route::get('PacientesGen', [MedicinaGenController::class, 'index']);

Route::get('Certificados/{id}', [MedicinaGenController::class, 'index2']);

Route::get('RecetaMed/{id}', [MedicinaGenController::class, 'index3']);

// recetas medico general

Route::put('actualizar-PacientesGen/{paciente}', [MedicinaGenController::class, 'store']);

Route::put('actualizar-RecetaMed/{paciente}', [RecetasGenController::class, 'store']);


// laboratorio medico General

Route::get('Laboratorio', [MedicinaGenController::class, 'index4']);
Route::get('Laboratorio_Receta/{id}', [MedicinaGenController::class, 'index5']);

// laboratorio medico laratorio Medico General
Route::put('actualizar-Laboratorio/{paciente}', [LaboratorioController::class, 'store']);

// laboratorio medico laratorio Medico General

Route::get('ObtetraIndex',[ObtetraController::class,'index']);


Route::get('Obtetra/{id}', [ObtetraController::class, 'index2']);
Route::put('actualizar-Obtetra/{paciente}', [ObtetraController::class, 'store']);
