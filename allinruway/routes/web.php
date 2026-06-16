<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

