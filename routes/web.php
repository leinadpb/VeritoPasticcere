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
Route::get('product/{id}', 'VeritoController@singleProduct')->name('single-product');

//To Admin pages
Route::get('admin/add-product', function(){
    return view('admin.add-product');
})->name('add-product')->middleware('auth');

Route::get('admin/add-client', function(){
    return view('admin.add-client');
})->name('add-client')->middleware('auth');

Route::get('clientes/{id}/delete', 'VeritoController@deleteClient')->name('delete-client')->middleware('auth');

Route::get('product/{id}/delete','VeritoController@deleteProduct')->name('delete-product');
Route::get('product/{id}/modify','VeritoController@modifyProduct')->name('modify-product');
Route::post('product/{id}/modify-product', 'VeritoController@modifyProductAction')->name('modify-product-action');

Route::post('save-product', 'VeritoController@saveProduct')->name('save-product');
Route::post('save-client', 'VeritoController@saveClient')->name('save-client');

//Send contact email
Route::post('/contacto/send', 'VeritoController@sendMail')->name('send-mail');

//Search engine
Route::post('/search', 'VeritoController@search')->name('search');

//Testing
Route::get('/cover', function(){
    return view('others.cover');
})->name('cover');
Auth::routes();


