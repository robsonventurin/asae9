<?php

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
    return redirect()->route('listar_clientes');
});

/* Rotas para clientes */
Route::get('/clientes/listar', 'ClienteController@telaListar')->name("listar_clientes");
Route::get('/clientes/cadastro', 'ClienteController@telaCadastro')->name("cadastrar_clientes");
Route::post('/clientes/cadastro/efetua', 'ClienteController@adicionar')->name("cadastrar_clientes_efetua");
