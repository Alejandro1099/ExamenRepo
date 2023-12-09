<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//empleado
Route::get('/empleados', [EmpleadoController::class, 'mostrarEmpleados'])->name('empleado.mostrar');

Route::post('/empleados/crear', [EmpleadoController::class, 'crearEmpleado'])->name('empleado.crear');

//producto
Route::get('/productos', [ProductoController::class, 'mostrarProducto'])->name('producto.mostrar');

Route::post('/productos/crear', [ProductoController::class, 'crearProducto'])->name('producto.crear');

//proveedores
Route::get('/proveedor', [ProveedorController::class, 'mostrarProveedor'])->name('proveedor.mostrar');

Route::post('/proveedor/crear', [ProveedorController::class, 'crearProveedor'])->name('proveedor.crear');