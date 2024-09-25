<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['nombre'=>'Martha Alicia'],['apellido'=>'Santos Lopez']);
});
// Ruta para mostrar la vista show.blade.php
Route::get('/products/show', [ProductController::class, 'index']);

// Ruta para mostrar la vista create.blade.php
Route::get('/products/create', [ProductController::class, 'create']);

// Ruta para mostrar la vista update.blade.php
Route::get('/products/edit/{product}', [ProductController::class, 'edit']);

// Ruta para insertar producto
Route::post('/products/store', [ProductController::class, 'store']);

// Ruta para modificar producto
Route::put('/products/update/{product}', [ProductController::class, 'update']);

// Ruta para eliminar producto
Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);

//CLIENTES
// Ruta para mostrar la vista show.blade.php
Route::get('/clientes/show', [ClienteController::class, 'index']);

// Ruta para mostrar la vista create.blade.php
Route::get('/clientes/create', [ClienteController::class, 'create']);

// Ruta para mostrar la vista update.blade.php
Route::get('/clientes/edit/{cliente}', [ClienteController::class, 'edit']);

// Ruta para insertar clientes
Route::post('/clientes/store', [ClienteController::class, 'store']);

// Ruta para modificar clientes
Route::put('/clientes/update/{cliente}', [ClienteController::class, 'update']);

// Ruta para eliminar clientes
Route::delete('/clientes/destroy/{id}', [ClienteController::class, 'destroy']);

//CATEGORIA
// Ruta para mostrar la lista de categorías en la vista show.blade.php
Route::get('/categorias/show', [CategoriaController::class, 'index']);

// Ruta para mostrar la vista create.blade.php
Route::get('/categorias/create', [CategoriaController::class, 'create']);

// Ruta para mostrar la vista update.blade.php
Route::get('/categorias/edit/{categoria}', [CategoriaController::class, 'edit']);

// Ruta para insertar una nueva categoría
Route::post('/categorias/store', [CategoriaController::class, 'store']);

// Ruta para modificar una categoría
Route::put('/categorias/update/{categoria}', [CategoriaController::class, 'update']);

// Ruta para eliminar una categoría
Route::delete('/categorias/destroy/{id}', [CategoriaController::class, 'destroy']);


