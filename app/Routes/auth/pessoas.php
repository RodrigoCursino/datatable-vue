<?php

use Illuminate\Support\Facades\Route;

Route::get('pessoas-cadastro','WEB\PessoasController@index');
Route::get('pessoas-list','WEB\PessoasController@listPessoa');