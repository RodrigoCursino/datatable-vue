<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socio;
use App\Pessoa;
use App\Doacao;
use DB;

class DoacaoController extends Controller
{
    private $pessoa;
    private $socio;
    private $doacao;

    public function __construct()
    {
        $this->pessoa = new Pessoa();
        $this->socio  = new Socio();
        $this->doacao = new Doacao();
    }

    public function index ()
    {
        return view('doacao.doacao-index');
    }
    /*
     * Original
    public function index(Request $request)
    {		
        $pessoas = $this->pessoa->lista($request);
        $filters = $this->getFilters($request);        

    	return view('doacao.index', compact('pessoas', 'filters'));
    }
    */

    public function getFilters($request)
    {
        $situacao   = !empty($request->get("situacao"))   ? $request->get("situacao")   : 'TODOS' ;
        $cobranca   = !empty($request->get("cobranca"))   ? $request->get("cobranca")   : '0' ;
        $tipoDoador = !empty($request->get("tipoDoador")) ? $request->get("tipoDoador") : '0' ;

        return array ("situacao"   => $situacao,
                      "cobranca"   => $cobranca,
                      "tipoDoador" => $tipoDoador);        
    }


    public function getPayments(Request $request)
    {
        $id      = $request->get('id');
        $doacoes = $this->doacao->listPessoa($id);

        return response()->json($doacoes);
    }

    public function salvar(Request $request)
    {
        $this->validate($request, $this->pessoa->rules, $this->pessoa->messages);
        $this->pessoa->create($request->all());
        return redirect()->route('pessoa.listar');
    }

    public function editar(Request $request, $id)
    {
        $this->validate($request, $this->pessoa->rules, $this->pessoa->messages);

        $dados['nome']                = $request->get('nome');
        $dados['numero_cadastro']     = $request->get('numero_cadastro');
        $dados['natureza_juridica']   = $request->get('natureza_juridica');
        $dados['cpf_cnpj']            = $request->get('cpf_cnpj');
        $dados['inscricao_municipal'] = $request->get('inscricao_municipal');
        $dados['razao_social']        = $request->get('razao_social');
        $dados['dt_nascimento']       = $request->get('dt_nascimento');
        $dados['endereco']            = $request->get('endereco');
        $dados['numero']              = $request->get('numero');
        $dados['complemento']         = $request->get('complemento');
        $dados['bairro']              = $request->get('bairro');
        $dados['cidade']              = $request->get('cidade');
        $dados['uf']                  = $request->get('uf');
        $dados['cep']                 = $request->get('cep');
        $dados['fone1']               = $request->get('fone1');
        $dados['fone2']               = $request->get('fone2');
        $dados['fax']                 = $request->get('fax');
        $dados['celular']             = $request->get('celular');
        $dados['email1']              = $request->get('email1');
        $dados['email2']              = $request->get('email2');
        $dados['observacao']          = $request->get('observacao');
        $dados['rg']                  = $request->get('rg');
        $dados['profissao']           = $request->get('profissao');
        $dados['apelido']             = $request->get('apelido');

        $this->pessoa->where('id', $id)->update($dados); 
        return redirect()->route('doacoes');          
    }

    public function selecionar($id)
    {
        $pessoa = $this->pessoa->find($id);     
        return view('pessoa.editar', compact('pessoa'));
    }

    public function deletar($id)
    {
        $pessoa = $this->pessoa->find($id);

        if ($pessoa) {
            $dados = ([
                'situacao' => 'INATIVO'
            ]);         

            $this->pessoa->where('id', $id)->update($dados);
        }

        return redirect()->route('doacoes');          
    }     
}
