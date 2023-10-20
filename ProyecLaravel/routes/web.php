<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
 


//Rutas Indivuduales para controlador

Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/loquequieroolvidar', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');

//ruta para el request post del recuerdo
Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');








/*
//Rutas agrupadas por controlador

Route::controller(diarioController::class)->group(function (){
   Route::get('/','metodoInicio')->name('apodoInicio');
   Route::get('/form','metodoFormulario')->name('apodoFormulario');
   Route::get('/loquequieroolvidar','metodoRecuerdos')->name('apodoRecuerdos');
});

*/
















/*
//rutas de tipo peticion

 Route::get('/', function () {
    return view('welcome');
 });

 Route::get('/form', function () {
    return view('formulario');
 });

 Route::get('/loquequieroolvidar', function () {
    return view('recuerdos');
 });



//rutas tipo view

Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/form', 'formulario')->name('apodoFormulario');
Route::view('/loquequieroolvidar', 'recuerdos')->name('apodoRecuerdos');

*/