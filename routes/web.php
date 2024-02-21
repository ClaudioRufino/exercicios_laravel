<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClaudioController;
use App\Http\Controllers\ChatandaController;
use App\Http\Controllers\SabinoController;


Route::get('/claudio', [ClaudioController::class, 'index'])->name('claudio');

Route::prefix('claudio')->group(function () {
    			
    Route::get('/exercicio1', function () {
                return "Clicou em exercicio1";
        });
});


Route::get('/chatanda', [ChatandaController::class, 'index'])->name('chatanda');

Route::prefix('chatanda')->group(function () {
    			
    Route::get('/exercicio1', function () {
                return view('exercicio1');
        });
});


Route::get('/sabino', [SabinoController::class, 'index'])->name('sabino');

Route::prefix('sabino')->group(function () {
    			
    Route::get('/exercicio1', function () {
                return "Clicou em exercicio1";
        });
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', function(){
    return view('teste');
});