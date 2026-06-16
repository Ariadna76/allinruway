<?php

use Illuminate\Http\Request;

class ProductoController extends ProductoController
{
    public function index(){

        $productos= Producto::all();

        return view('productos.index', compact('productos'));
    }
}