<?php

use App\Http\Controllers\ArticuloController;
use App\Models\Articulo;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ArticuloController::class , 'index'])->name('articulos.index');
Route::get('/productos/detalles/{id}', [ArticuloController::class , 'show'])->name('articulos.show');
Route::get('/productos/destroy/{id}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');
Route::get('/productos/create', [ArticuloController::class, 'create'])->name('articulos.create')->middleware('auth');
Route::post('/productos', [ArticuloController::class, 'store'])->name('articulos.store');
Route::post('/{id}', [ArticuloController::class, 'store'])->name('articulos.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
