<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DoacoesController extends Controller
{
    private $pessoa;
    private $socio;
    private $doacao;

    public function __construct()
    {
    }

    public function index ()
    {
        return 'olá';
    }

}
