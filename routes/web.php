<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rutas traer tabs dependiendo el rol del usuario
Route::get('/roles-usuario', [App\Http\Controllers\HomeController::class, 'rolesUsuario'])->name('rolesUsuario');
//rutas director
Route::resource('/ciclo-escolar', App\Http\Controllers\Director\CicloEscolarController::class);
Route::resource('/estudiantes', App\Http\Controllers\Director\EstudiantesController::class);
Route::resource('/grados', App\Http\Controllers\Director\GradosController::class);
Route::resource('/salones', App\Http\Controllers\Director\SalonesController::class);
Route::resource('/materias', App\Http\Controllers\Director\MateriasController::class);
Route::resource('/calificaciones', App\Http\Controllers\Director\CalificacionesController::class);
Route::resource('/maestros', App\Http\Controllers\Director\MaestrosController::class);

