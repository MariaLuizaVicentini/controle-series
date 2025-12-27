<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;
use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\EntrarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/series', [SeriesController::class, 'index'])
->name('listar_series');

Route::get('/series/criar', [SeriesController::class, 'create'])
->name('form_criar_serie');

Route::post('/series/criar', [SeriesController::class, 'store']);

Route::delete('/series/{id}', [SeriesController::class, 'destroy']);

Route::post('/series/{id}/editaNome', [SeriesController::class, 'editaNome']);


Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);

Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entrar', [EntrarController::class, 'index']);
Route::post('/entrar', [EntrarController::class, 'entrar']);