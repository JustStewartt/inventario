<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('productos', 'App\Http\Controllers\ProductoController');
/**
*MOstrar productos

*Route::get('/productos', function(){

*});
*
**
*agregar productos
*Route::get('/productos', function(Request $request){

*});


*eliminar productos

*Route::get('/productos/{id}', function($id){
*/

/* });Auth::routes();
*/
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
