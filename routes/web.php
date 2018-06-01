<?php

Auth::routes();

Route::middleware(['auth'])->group(function(){

	Route::get('/', function () {
	    return redirect('/home');
	});

	Route::get('/home', 'HomeController@index')->name('home');

	# consultas
	Route::get('/doacoes',                'DoacoesController@index')->name('doacoes');
	Route::get('/doacoes-cadastro',       'DoacoesController@create')->name('doacoes-cadastro');
	Route::post('/doacoes',               'DoacoesController@index')->name('doacoes2');
	Route::get('/pessoa/editar/{id}',     'DoacoesController@selecionar')->name('pessoa.editar');
	Route::put('/pessoa/salvar/{id}',     'DoacoesController@editar')->name('pessoa.salvar2');
	Route::delete('/pessoa/deletar/{id}', 'DoacoesController@deletar')->name('pessoa.deletar');


	# Ajax
	Route::get('/getPayments',   'DoacoesController@getPayments')->name('getPayments');

});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/ ', 'WEB\HomeController@index')->name('home');
    foreach (File::files(app()->path() . '/Routes/auth') as $file) {
        require $file;
    }
});

