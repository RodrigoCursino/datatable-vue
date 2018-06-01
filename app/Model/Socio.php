<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $fillable = [
    	'id_pessoa',
    	'id_tipo_pagamento',
    	'adesao',
    	'tipo'    	
    ];

    public $rules = [
    	'id_pessoa' 		=> 'required',
    	'id_tipo_pagamento' => 'required',
    	'adesao' 		    => 'required',
    	'tipo' 				=> 'required' 
    ];

    public $messages = [
    	'id_pessoa|required' 		 => 'Campo Pessoa é obrigatório',
    	'id_tipo_pagamento|required' => 'Campo Tipo de pagamento é obrigatório',
    	'adesao|required' 		     => 'Campo adesão é obrigatório',
    	'tipo|required' 			 => 'Campo tipo é obrigatório' 
    ];   
}
