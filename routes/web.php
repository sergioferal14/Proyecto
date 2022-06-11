<?php

use App\Http\Controllers\Oath\GitHubController;
use App\Http\Controllers\PlayerController;
use App\Http\Livewire\ShowPlayer;
use App\Http\Livewire\ShowSesion;
use App\Http\Livewire\ShowTeam;
use App\Http\Livewire\ShowUser;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Rutas para los controladores livewire de teams y sesions

Route::middleware(['auth:sanctum', 'verified'])->get('teams', ShowTeam::class)->name('teams.index');
Route::middleware(['auth:sanctum', 'verified'])->get('sesions', ShowSesion::class)->name('sesion.index');

//Rutas para metodos del controlador de Players

Route::middleware(['auth:sanctum', 'verified'])->get('players/{team}', "App\Http\Controllers\PlayerController@index")->name('players.index');
Route::middleware(['auth:sanctum', 'verified'])->post('players', "App\Http\Controllers\PlayerController@store")->name('players.store');
Route::middleware(['auth:sanctum', 'verified'])->get('players/{team}/player/{player}', "App\Http\Controllers\PlayerController@edit")->name('players.edit');
Route::middleware(['auth:sanctum', 'verified'])->post('players1{player}', "App\Http\Controllers\PlayerController@update")->name('players.update');

//Rutas para los metodos del controlador de Ejercicios

Route::middleware(['auth:sanctum', 'verified'])->get('ejercicios/sesion/{sesion}', "App\Http\Controllers\EjercicioController@index")->name('ejercicio.index');
Route::middleware(['auth:sanctum', 'verified'])->get('ejercicios/{tipo}', "App\Http\Controllers\EjercicioController@index1")->name('ejercicio.index1');
Route::middleware(['auth:sanctum', 'verified'])->get('ejercicios', "App\Http\Controllers\EjercicioController@index2")->name('ejercicio.index2');
Route::middleware(['auth:sanctum', 'verified'])->post('ejercicios', "App\Http\Controllers\EjercicioController@store")->name('ejercicios.store');
Route::middleware(['auth:sanctum', 'verified'])->post('ejercicios{ejercicio}', "App\Http\Controllers\EjercicioController@update")->name('ejercicio.update');
Route::middleware(['auth:sanctum', 'verified'])->get('ejercicios/borrar/{ejercicio}', "App\Http\Controllers\EjercicioController@destroy")->name('ejercicios.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('ejercicios/quitado/{ejercicio}', "App\Http\Controllers\EjercicioController@quitar")->name('ejercicios.quitar');

Route::middleware(['auth:sanctum', 'verified'])->get('ejercicio/asignado/{ejercicio}', "App\Http\Controllers\EjercicioController@asignarSesion")->name('ejercicio.asignar');

//Ruta para el excel
//Route::middleware(['auth:sanctum', 'verified'])->get('exportar/{team}', "App\Http\Controllers\PlayerController@export")->name('players.excel');


//Ruta Administrar Usuarios
Route::middleware(['auth:sanctum', 'verified'])->get('users', ShowUser::class)->name('users.index');
