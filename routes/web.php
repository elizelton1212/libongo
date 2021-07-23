<?php

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

/*Route::get('/', function () {
    return view('home');
});
*/

Auth::routes();

//Route::redirect('/', 'teste',);

//Route::view('/', 'home');

Route::resource('funcionario','FuncionarioController');
Route::resource('cliente','ClienteController');
Route::resource('produto','ProdutoController');
Route::resource('fornecedor','FornecedorController');
Route::resource('imposto','ImpostoController');
Route::resource('categoria','CategoriaController');
Route::resource('venda','VendaController');
Route::any('vendaCarrinho','CarrinhoController@index')->name('vendaCarrinho');
Route::any('cadastraImposto','ImpostoController@store');
Route::any('cadastrarCategoria','CategoriaController@store');
Route::any('cadastrarFornecedor','FornecedorController@store');
Route::any('cadastrarCliente','ClienteController@store');
Route::any('cadastrarFuncionario','FuncionarioController@store');
Route::any('cadastrarProduto','ProdutoController@store');
Route::any('/alterarProduto','ProdutoController@update');
Route::any('/updateImposto','ImpostoController@update');
Route::any('/updateCategoria','CategoriaController@update');
Route::any('/update','FornecedorController@update');
Route::any('/updateCliente','ClienteController@update')->name('updateCliente');
Route::any('compra','VendaController@compra');
Route::get('/', 'HomeController@index')->name('home');
Route::get('balanco','VendaController@balanco');
Route::any('consultarBalanco','VendaController@balancoR');
Route::any('balancoE','VendaController@balancoE');
Route::any('balancoES','VendaController@balancoEShow');

