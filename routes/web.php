<?php
Route::get('/',"usuarioController@exibir");

Route::get('/cadastro',"cadastroController@exibir");

Route::post('/cadastro',"cadastroController@inserir");

