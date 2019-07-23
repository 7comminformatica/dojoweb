<?php
<<<<<<< HEAD
=======

>>>>>>> a819d5d8668a1b1b2479123a953329cf22264641
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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',"usuarioController@exibir");

Route::get('/cadastro',"cadastroController@exibir");
Route::post('/cadastro',"cadastroController@inserir");
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> a819d5d8668a1b1b2479123a953329cf22264641
