<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('clientes', function () {
    return view('clientes.index');
});

Route::get('clientes/create', function () {
    return view('clientes.create');
});

Route::get('clientes/edit{id}', function ($id) {
    return view('clientes.edit', array('id'=>$id));
});

Route::get('clientes/show{id}', function ($id) {
    return view('clientes.show', array('id'=>$id));
});

Route::get('mesas', function () {
    return view('mesas.index');
});

Route::get('mesas/create', function () {
    return view('mesas.create');
});

Route::get('mesas/edit{id}', function ($id) {
    return view('mesas.edit', array('id'=>$id));
});

Route::get('mesas/show{id}', function ($id) {
    return view('mesas.show', array('id'=>$id));
});

Route::get('stock/compras', function () {
    return view('compras.index');
});

Route::get('stock/compras/create', function () {
    return view('compras.create');
});

Route::get('stock/compras/show{id}', function ($id) {
    return view('compras.show', array('id'=>$id));
});

Route::get('stock/empresas', function () {
    return view('empresas.index');
});

Route::get('stock/empresas/create', function () {
    return view('empresas.create');
});

Route::get('stock/empresas/edit{id}', function ($id) {
    return view('empresas.edit', array('id'=>$id));
});

Route::get('stock/empresas/show{id}', function ($id) {
    return view('empresas.show', array('id'=>$id));
});

Route::get('stock/productos', function () {
    return view('productos.index');
});

Route::get('stock/productos/create', function () {
    return view('productos.create');
});

Route::get('stock/productos/edit{id}', function ($id) {
    return view('productos.edit', array('id'=>$id));
});

Route::get('stock/productos/show{id}', function ($id) {
    return view('productos.show', array('id'=>$id));
});

Route::get('stock/proveedores', function () {
    return view('proveedores.index');
});

Route::get('stock/proveedores/create', function () {
    return view('proveedores.create');
});

Route::get('stock/proveedores/edit{id}', function ($id) {
    return view('proveedores.edit', array('id'=>$id));
});

Route::get('stock/proveedores/show{id}', function ($id) {
    return view('proveedores.show', array('id'=>$id));
});

Route::get('stock', function () {
    return view('stock.index');
});

Route::get('stock/show{id}', function ($id) {
    return view('stock.show', array('id'=>$id));
});

Route::get('usuarios', function () {
    return view('usuarios.index');
});

Route::get('usuarios/create', function () {
    return view('usuarios.create');
});

Route::get('usuarios/edit{id}', function ($id) {
    return view('usuarios.edit', array('id'=>$id));
});

Route::get('usuarios/show{id}', function ($id) {
    return view('usuarios.show', array('id'=>$id));
});

Route::get('ventas', function () {
    return view('ventas.index');
});

Route::get('ventas/show{id}', function ($id) {
    return view('ventas.show', array('id'=>$id));
});

Route::post('logout', function () {
    return "saliendo de la sesión";
});