<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    return view('pages/index');
}) ->name('index');


Route::get('/dash', function(){
    return view('pages.dash');
})->name('dash');


// Rota para processar a importação de CSV (método POST)
Route::post('/importar-csv', [ImportadorController::class, 'importar'])->name('importar.csv');
