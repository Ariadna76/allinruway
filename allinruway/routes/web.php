<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

// 1. RUTA DE BÚSQUEDA: Ahora lee los datos reales de la tabla 'trabajadores'
Route::get('/buscar-trabajador', function () {
    // Jalamos todos los registros de la base de datos
    $trabajadores = DB::table('trabajadores')->get();
    
    // Se los mandamos a la vista buscar.blade.php
    return view('buscar', compact('trabajadores')); 
})->name('cliente.buscar');

// 2. RUTA DE REGISTRO: Guarda lo que el trabajador escribe en el formulario multipaso
Route::post('/register', function (Request $request) {
    DB::table('trabajadores')->insert([
        'nombre'     => $request->input('nombre'), 
        'dni'        => $request->input('dni'),
        'correo'     => $request->input('correo'),
        'celular'    => $request->input('celular'),
        'password'   => Hash::make($request->input('password')), // Encripta la contraseña por seguridad
        'ubicacion'  => $request->input('ubicacion'),
        'oficio'     => $request->input('oficio'),
        'descripcion'=> $request->input('descripcion'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Al terminar de guardar, lo manda directo al paso de éxito
    return redirect()->back()->with('success', true);
});