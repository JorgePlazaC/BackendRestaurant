<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagenController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Rutas generales
Route::resource('facturas',FacturaController::class);
Route::resource('mesas',MesaController::class);
Route::resource('pedidos',PedidoController::class);
Route::resource('productos',ProductoController::class);
Route::resource('categorias',CategoriaController::class);
Route::resource('imagens',ImagenController::class);


//Rutas personalizadas
//Productos
Route::get('/buscarPorCategoria', [ProductoController::class, 'BuscarPorIdCategoria'])->name('BuscarPorIdCategoria');
Route::get('/productosActivos', [ProductoController::class, 'ProductosActivos'])->name('ProductosActivos');
Route::get('/productosInactivos', [ProductoController::class, 'ProductosInactivos'])->name('ProductosInactivos');

//Mesas
Route::get('/mesasActivos', [MesaController::class, 'MesasActivos'])->name('MesasActivos');
Route::get('/mesasInactivos', [MesaController::class, 'MesasInactivos'])->name('MesasInactivos');

//Categorias
Route::get('/categoriasActivos', [CategoriaController::class, 'CategoriasActivos'])->name('CategoriasActivos');
Route::get('/categoriasInactivos', [CategoriaController::class, 'CategoriasInactivos'])->name('CategoriasInactivos');

//Imagenes
Route::get('/buscarImagen', [ImagenController::class, 'BuscarPorIdImagen'])->name('BuscarPorIdImagen');
Route::post('/upload', [ImagenController::class, 'uploadImage'])->name('images.upload');
//Route::post('/upload', [ProductoController::class, 'uploadImage'])->name('images.upload');
