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


use App\Http\Controllers\EventController;

Route::get('/',[EventController::class, 'index']);

Route::get('/busca',[EventController::class, 'busca']);

Route::get('/teacher/create',[EventController::class, 'create'])->middleware('auth');

Route::get('/teacher/{id}',[EventController::class, 'show']);

Route::post('/teacher',[EventController::class, 'store']);

Route::delete('teacher/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/teacher/editar/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/teacher/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/modulos', [EventController::class, 'modules']);
Route::get('/modulos/musica', function(){
    return view('modulos.musica');
});
Route::get('/modulos/notas', function(){
    return view('modulos.notas');
});
Route::get('/modulos/acidentes', function(){
    return view('modulos.acidentes');
});
Route::get('/modulos/intervalos', function(){
    return view('modulos.intervalos');
});
Route::get('modulos/notainstrumentos', function(){
    return view('modulos.notainstrumentos');
});
Route::get('modulos/timbres', function(){
    return view('modulos.timbres');
});
Route::get('modulos/escalas/escalas', function(){
    return view('modulos.escalas.escalas');
});
Route::get('modulos/escalas/grausmusicais', function(){
    return view('modulos.escalas.grausmusicais');
});
Route::get('modulos/escalas/dimaujus', function(){
    return view('modulos.escalas.dimaujus');
});
Route::get('modulos/escalas/oitavas', function(){
    return view('modulos.escalas.oitavas');
});
Route::get('modulos/acordes/acordes', function(){
    return view('modulos.acordes.acordes');
});
Route::get('modulos/acordes/triade', function(){
    return view('modulos.acordes.triade');
});
Route::get('modulos/acordes/tetrade', function(){
    return view('modulos.acordes.tetrade');
});
Route::get('modulos/acordes/formacaoacordes', function(){
    return view('modulos.acordes.formacaoacordes');
});
Route::get('modulos/acordes/nomes', function(){
    return view('modulos.acordes.nome');
});
Route::get('modulos/acordes/cifras', function(){
    return view('modulos.acordes.cifras');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index');
})->name('dashboard');
