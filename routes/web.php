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

//primeira rota, aqui esta retornando a view welcome
Route::get('/', function () {
    return view('welcome');
});

Routes::get('/empresa', function(){
    return view('site/empresa');
});
