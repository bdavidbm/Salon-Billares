<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'getHome');
    Route::get('/cobrar{id}', 'getCobrar');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::controller(ClientesController::class)->group(function(){
    Route::get('clientes', 'getIndex');
    Route::get('clientes/create', 'getCreate');
    Route::get('clientes/show{id}', 'getShow');
    Route::get('clientes/edit{id}', 'getEdit');
});

Route::controller(MesasController::class)->group(function(){
    Route::get('mesas', 'getIndex');
    Route::get('mesas/create', 'getCreate');
    Route::get('mesas/show{id}', 'getShow');
    Route::get('mesas/edit{id}', 'getEdit');
});

Route::controller(ComprasController::class)->group(function(){
    Route::get('stock/compras', 'getIndex');
    Route::get('stock/compras/create', 'getCreate');
    Route::get('stock/compras/show{id}', 'getShow');
});

Route::controller(EmpresasController::class)->group(function(){
    Route::get('stock/empresas', 'getIndex');
    Route::get('stock/empresas/create', 'getCreate');
    Route::get('stock/empresas/show{id}', 'getShow');
    Route::get('stock/empresas/edit{id}', 'getEdit');
});

Route::controller(ProductosController::class)->group(function(){
    Route::get('stock/productos', 'getIndex');
    Route::get('stock/productos/create', 'getCreate');
    Route::get('stock/productos/show{id}', 'getShow');
    Route::get('stock/productos/edit{id}', 'getEdit');
});

Route::controller(ProveedoresController::class)->group(function(){
    Route::get('stock/proveedores', 'getIndex');
    Route::get('stock/proveedores/create', 'getCreate');
    Route::get('stock/proveedores/show{id}', 'getShow');
    Route::get('stock/proveedores/edit{id}', 'getEdit');
});

Route::controller(StockController::class)->group(function(){
    Route::get('stock', 'getIndex');
    Route::get('stock/show{id}', 'getShow');
});

Route::controller(UsuariosController::class)->group(function(){
    Route::get('usuarios', 'getIndex');
    Route::get('usuarios/create', 'getCreate');
    Route::get('usuarios/show{id}', 'getShow');
    Route::get('usuarios/edit{id}', 'getEdit');
});

Route::controller(VentasController::class)->group(function(){
    Route::get('ventas', 'getIndex');
    Route::get('ventas/show{id}', 'getShow');
});

Route::post('logout', function () {
    return "saliendo de la sesión";
});