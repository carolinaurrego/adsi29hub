<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use App\Http\Controllers\principalcontroller;
use App\Http\Controllers\vistacontroller;
use App\Http\Controllers\RegistrouController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ruta principal
Route::get('/',principalcontroller::class );

Route::get('vistas', [vistacontroller::class,'uno']);


Route::get('vistas/nosotros', [vistacontroller::class,'dos']);



Route::get('vistas/servicios', [vistacontroller::class,'tres']);


Route::get('vistas/galeria', [vistacontroller::class,'cuatro']);



Route::get('vistas/contactenos', [vistacontroller::class,'cinco']);


Route::get('vistas/cotizar', [vistacontroller::class,'seis']);


Route::get('vistas/fcotizar', [vistacontroller::class,'siete']);


Route::get('vistas/fcontactenos', [vistacontroller::class,'ocho']);



Route::get('vistas/insesion', [vistacontroller::class,'nueve']);


Route::get('vistas/egistrar', [vistacontroller::class,'diez']);


Route::POST('vistas', [vistacontroller::class,'store'])->name('registrar.store');





Route::get('vistas/registro', [vistacontroller::class,'once']);
