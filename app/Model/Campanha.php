<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Utils\DataViewer;

class Campanha extends Model
{
    use DataViewer;

    protected $table = "campanhas";

    protected $allowedFilters = [
        'id',
        'nome',
        'descricao',
        'created_at',
        //realations
    ];

    protected $orderable = [
        'id','nome', 'descricao'
    ];

    protected $fillable = [
    	'nome',
    	'inicio',
    	'fim',
    	'descricao',
    	'tag'
    ];

    public $rules = [
    	'nome'      => 'required',
    	'inicio'    => 'required',
    	'descricao' => 'required',
    ];

    public $messages = [
    	'nome.required'      => "O Campo nome é obrigatório",
        'inicio.required'    => "Data de inicio é obrigatório",
        'descricao.required' => "Descrição é obrigatório"
    ];  
}
