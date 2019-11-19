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
//Route::get('/',function(){
//	return view("template.app");
//});

Route::group(["prefix" => "pessoas"],function(){
	Route::get("/",function(){
		return redirect('/pessoas/A');
	});
	Route::get("/novo","PessoasController@novoView");
	Route::get("/{id}/editar","PessoasController@editarView");
	Route::get("/{id}/excluir","PessoasController@excluirView");
	Route::get("/{id}/destroy","PessoasController@destroy");
	Route::get("/store","PessoasController@store");
	Route::post("/update","PessoasController@update");
	Route::get("/busca","PessoasController@busca");
	Route::get("/{letra}","PessoasController@index");
});