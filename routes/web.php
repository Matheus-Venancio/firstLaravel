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

Route::get('/empresa', function(){
    return view('site/empresa');
});

Route::any('/any', function(){
    return ('Todos que quiserem');
});

Route::match(['get','post'], '/match', function(){
    return ("permitiu apenas algubns");
});

//Passando parametros
Route::get('/produto/{id}/{categoria?}', function($id, $categoria =''){
  return ('o id do produto é: '.$id."<br>"."A categoria é: ".$categoria);
});


//Redirecionamento
Route::redirect('/sobre', '/empresa');

//Redirecionamente personalizado
Route::get('/news', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect();
});


//Criando grupo de rotas com nomes e prefixos definidos
Route::group([
    'prefix' ->'admin', //Definindo sobre o prefix das rotas
    'as' ->'admin.' //definindo sobre o nome das rotas
],function(){


    Route::get('admin/dashboard', function(){
        return 'dashboard';
    })->name('dashboard');
    Route::get('admin/users', function(){
        return 'users';
    })->name('users');
    Route::get('admin/clientes', function(){
        return 'clientes';
    })->name('clientes');
});



