<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = "bancos";

    protected $fillable = [
    	'nome',
    	'numero'
    ];

    public $rules = [
    	'nome'   => 'required|min:3|max:25',
    	'numero' => 'required'
    ];

    public $messages = [
    	'nome.required'   => "O Campo nome é obrigatório",
    	'nome.min'        => "Nome deve ter pelo menos 3 caracteres",
    	'nome.max'        => "Nome deve ter no max 100 caracteres",
        'numero.required' => "O campo numero é obrigatório",
    ];    
}
