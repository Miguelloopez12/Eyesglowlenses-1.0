<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductosController;

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
    return view('auth.login');

});

Route::get('/compra', function () {
    return view('compra');

});

Auth::routes();





Route::get('/sinbordes', [ProductosController::class, 'index'])->name('sinbordes');

route::get("/conbordes", [ProductosController::class,"index1"])->name("conbordes");

route::get("/home", [HomeController::class,"index"])->name("home");



route::get("/descripcion/{id_productos}", [ProductosController::class,"mostrarDescripcion"])->name("descripcion.pr");

route::get("/compra/{id_productos}", [ProductosController::class,"mostrarProducto"])->name("compra.pr");

Route::post('/compra', [CompraController::class, 'procesarCompra'])->name("compra");






