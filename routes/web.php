<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\Route;

Route::view('/presentacion',function () {
    return view('presentacion');
});
Route::view('/caracteristicas',function () {
    return view('caracteristicas');
});
Route::view('/historia',function () {
    return view('historia');
});
Route::view('/ubicacion',function () {
    return view('ubicacion');
});
Route::view('/formulario',function () {
    return view('formulario');
});
route:: post('/guardarOpinion',[OpinionController::class,'guardarOpinio']);