<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZonaController;

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

//Route::get('/', HomeController::class);

Route::controller(ZonaController::class)->group(function () {

    Route::get('/', 'index')->name('home');

    Route::get('/guajira','LaGuajira')->name('guajira');

    Route::get('/choco','Choco')->name('choco');

    Route::get('/cartagena','Cartagena')->name('cartagena');


    Route::get('/zona','zona')->name('zona');

    Route::get('/destino','destino')->name('destino');

    Route::get('/blog','blog')->name('blog');

    Route::get('/comentario','comentario')->name('comentario');
    Route::post('/comentario', 'comentariosform')->name('comentariosform');


});

Route::get('/contacto',[ContactanosController::class, 'index'])->name('contacto');

Route::post('/contacto',[ContactanosController::class, 'store'])->name('contacto.store');
