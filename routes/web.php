<?php

use Illuminate\Support\Facades\Route;

// rotas

Route::get('/', function () {     return view('index'); });
Route::prefix('agenda')->group(function(){
    Route::get('/', [ContactController::class, 'index'])->name('contatos-index');
});
