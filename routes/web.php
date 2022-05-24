<?php

use App\Http\Controllers\PlayerController;
use App\Http\Livewire\ShowPlayer;
use App\Http\Livewire\ShowTeam;
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

Route::resource('players1', PlayerController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('teams', ShowTeam::class)->name('teams.index');
//Route::middleware(['auth:sanctum', 'verified'])->get('players', ShowPlayer::class)->name('players.index');
Route::middleware(['auth:sanctum', 'verified'])->get('players/{team}', "App\Http\Controllers\PlayerController@index")->name('players.index');
Route::middleware(['auth:sanctum', 'verified'])->get('players/{team}', "App\Http\Controllers\PlayerController@index")->name('players.store');



