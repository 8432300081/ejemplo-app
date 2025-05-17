<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// declaracion de rutas fijas
Route::get('/Productos',function(){
    return "Sección de productos";
});

// deteccion de parametros
Route::get('Productos/{id}', function ($id) {
    return "Bienvenido $id";
});

Route::get('prueba_parametros/{id}', function ($id) {
    $d = $id;
    $nombre = explode("-",$d);
    return "tu nombre es $nombre[1]";
});