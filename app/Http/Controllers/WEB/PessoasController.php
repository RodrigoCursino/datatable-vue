<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Model\Pessoa;
use Illuminate\Http\Request;


class PessoasController extends Controller
{


    public function __construct()
    {

    }

    public function listPessoa ()
    {

        return response()->json([
            "Pessoas" =>  Pessoa::advencedFilters()
        ]);
    }
}
