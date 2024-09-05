<?php

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/guardar-formulario', function (Request $request) {
    // recibir datos
    //dd($request->all(), $request->nombre);

    // validar datos

    // guardar datos
    $contacto = new Contacto();
    $contacto->name = $request->nombre;
    $contacto->correo = $request->correo;
    $contacto->mensaje = $request->correo;
    $contacto->estatus = $request->mensaje;

    // redireccionar
});
