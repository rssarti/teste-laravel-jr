<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

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

Route::get('/lista', [ListaController::class, 'index'])->name('list');
Route::get('/lista/create', [ListaController::class, 'create'])->name('create');
Route::post('/lista/create', [ListaController::class, 'store'])->name('store');
Route::get('/lista/edit/{contact}', [ListaController::class, 'show'])->name('edit');
Route::put('/lista/edit/{contact}', [ListaController::class, 'update'])->name('update');
Route::get('/lista/edit/{contact}/delete', [ListaController::class, 'delete'])->name('delete');
