<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;
use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\EntrarController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/series', [SeriesController::class, 'index'])
->name('listar_series');

Route::get('/series/criar', [SeriesController::class, 'create'])
->name('form_criar_serie')
->middleware('auth');

Route::post('/series/criar', [SeriesController::class, 'store'])
->middleware('auth');

Route::delete('/series/{id}', [SeriesController::class, 'destroy'])
->middleware('auth');

Route::post('/series/{id}/editaNome', [SeriesController::class, 'editaNome'])
->middleware('auth');


Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);

Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir'])
->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entrar', [EntrarController::class, 'index']);
Route::post('/entrar', [EntrarController::class, 'entrar']);

Route::get('/registrar', [RegistroController::class, 'create']);
Route::post('/registrar', [RegistroController::class, 'store']);

Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});