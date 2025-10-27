<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\OpinionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formulario',function () {
    return view('formulario');
});
Route::get('/presentacion',function () {
    return view('presentacion');
});
Route::get('/caracteristicas',function () {
    return view('caracteristicas');
});
Route::get('/historia',function () {
    return view('historia');
});
Route::get('/ubicacion',function () {
    return view('ubicacion');
});

route::post('/guardarOpinion',[OpinionController::class,'guardarOpinio']);