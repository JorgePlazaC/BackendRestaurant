<?php


use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductoController;

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
    return view('inicio');
});

Route::get('/tocarta', [App\Http\Controllers\ProductoController::class, 'cartastica'])->name('tocarta');
Route::get('/topedido', [App\Http\Controllers\PedidoController::class, 'orden'])->name('topedido');
Route::get('/tofactura', [App\Http\Controllers\FacturaController::class, 'boleta'])->name('tofactura');

