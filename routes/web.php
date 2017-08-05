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

Route::get('/', 'VeritoController@index')->name('home');

//To others pages
Route::get('clientes', 'VeritoController@clientes')->name('clients');
Route::get('contacto', 'VeritoController@contacto')->name('contact');
Route::get('sobre-nosotros', 'VeritoController@sobre_nosotros')->name('about-us');
Route::get('todos-los-productos', 'VeritoController@todos_los_productos')->name('all-products');
Route::get('product/{id}', function(){
   return view('others.producto');
})->name('single-product');

//To Admin pages
Route::get('admin/add-product', function(){
    return view('admin.add-product');
});
