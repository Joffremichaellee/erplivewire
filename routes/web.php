<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Categoria\ShowCategoria;
use App\Http\Livewire\Categoria\CreateCategoria;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/inventario', function () {
    return view('inventario');
})->name('inventario');

Route::middleware(['auth:sanctum', 'verified'])->get('/categoria', ShowCategoria::class)->name('categoria.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/categoria/create', CreateCategoria::class)->name('categoria.create');
