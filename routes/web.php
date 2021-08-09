<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Personas;
use App\Http\Livewire\PapeletaDeInfraciones;
use App\Http\Livewire\Associations;

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
    return view('auth.login');
});
Route::get('/register', function() {
    return view('auth.register'); })->name('register');

//Route::get('/dash', function() {
    //return view('dash');  })->name('dash');
/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
Route::middleware(['auth:sanctum', 'verified'])->group( function(){
  
    Route::get('/dashboard', function() {
        return view('dashboard');  })->name('dashboard');
    Route::get('/personas', Personas::class)->name('personas');
    Route::get('/papeleta-de-infraciones', PapeletaDeInfraciones::class)->name('papeleta-de-infraciones');
    Route::get('/associations', Associations::class)->name('associations');
    route::get('/users',[UserController::class,'index'])->name('users.index');
    route::get('/users/create',[UserController::class,'create'])->name('users.create'); 
    route::get('/users/{id}',[UserController::class,'show'])->name('users.show');    
    Route::post('users',[UserController::class,'store'])->name('users.store');
});