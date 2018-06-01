<?php

namespace App\Model;

use App\Utils\DataViewer;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoas";
    use DataViewer;

    protected $orderable = [
        'id',
        'nome',
        'dt_nascimento',
        'numero',
        'cidade',
        'bairro',
        'email1',
        'email2',
        'apelido'
    ];

    protected $allowedFilters = [
        'nome',
        'numero_cadastro',
        'natureza_juridica',
        'cpf_cnpj',
        'inscricao_municipal',
        'razao_social',
        'dt_nascimento',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'fone1',
        'fone2',
        'fax',
        'celular',
        'email1',
        'email2',
        'observacao',
        'rg',
        'profissao',
        'apelido'
    ];

    protected $fillable = [
    	'nome',
    	'numero_cadastro',
    	'natureza_juridica',
    	'cpf_cnpj',
    	'inscricao_municipal',
    	'razao_social',
    	'dt_nascimento',
    	'endereco',
    	'numero',
    	'complemento',
    	'bairro',
    	'cidade',
    	'uf',
    	'cep',
    	'fone1',
    	'fone2',
    	'fax',
    	'celular',
    	'email1',
    	'email2',
    	'observacao',
    	'rg',
    	'profissao',
    	'apelido'
    ];

    public $rules = [
    	'nome' 				=> 'required',
    	'numero_cadastro' 	=> 'required',
    	'natureza_juridica' => 'required',
    	'cpf_cnpj' 			=> 'required',
    	'dt_nascimento' 	=> 'required',
    	'email1' 			=> 'required',
    	'apelido' 			=> 'required'
    ];

    public $messages = [
    	'nome|required' 			 => 'Nome Não pode ficar em branco',
    	'numero_cadastro|required' 	 => 'Numero do cadastro Não pode ficar em branco',
    	'natureza_juridica|required' => 'Natureza Juridica Não pode ficar em branco',
    	'cpf_cnpj|required' 		 => 'CPF / CNPJ Não pode ficar em branco',
    	'dt_nascimento|required' 	 => 'Data de nascimento Não pode ficar em branco',
    	'email1|required' 			 => 'Email Não pode ficar em branco',
    	'apelido|required' 			 => 'Apelido Não pode ficar em branco'
    ];  

    public function lista($request)
    {
        $tipoDoador   = $request->get("tipoDoador");
        $cobranca     = $request->get("cobranca");
        $situacao     = $request->get("situacao");

        $compTipo     = $tipoDoador != "0"     && $tipoDoador != null ? "=" : '<>';
        $compCobranca = $cobranca   != "0"     && $cobranca   != null ? "=" : '<>';
        $compSituacao = $situacao   != "TODOS" && $situacao   != null ? "=" : '<>';

        $pessoas = \DB::table('pessoas')->select(DB::raw("pessoas.id,
                                                          pessoas.nome,
                                                          pessoas.razao_social, 
                                                          pessoas.cpf_cnpj,
                                                          pessoas.natureza_juridica,
                                                          pessoas.sexo,
                                                          pessoas.situacao,                                                          
                                                          pessoas.dt_nascimento,
                                                          DATE_FORMAT(pessoas.doacao_primeira, '%m/%y') doacao_primeira,
                                                          DATE_FORMAT(pessoas.doacao_ultimo,   '%m/%y') doacao_ultimo,
                                                          pessoas.doacao_valor,
                                                          pessoas.tipo_doador,
                                                          pessoas.doacao_quantidade"))
                                        ->where('pessoas.situacao',    $compSituacao, $situacao)                                        
                                        ->where('pessoas.tipo_doador', $compTipo,     $tipoDoador)                                        
                                        ->get();

        foreach($pessoas AS $pessoa) {
            $dados[] = $this->tratarDados($pessoa);
        }

        return $dados;
    }


    public function tratarDados($pessoa)
    {

        if ($pessoa->tipo_doador == "SOCIO") {
            $tipo = '<spam class="label label-success">sócio</spam>';
        } else {
            $tipo = '<spam class="label label-info">pontual</spam>';
        } 

        $pessoa->nome         = str_replace('$', '', $pessoa->nome);
        $pessoa->razao_social = str_replace('$', '', $pessoa->razao_social);

        $nome = !empty($pessoa->nome) ? $pessoa->nome : $pessoa->razao_social; 
        $nome = "<span class='label label-default' title='".$nome."'>".substr($nome, 0, 50)."</span>";

        if ($pessoa->sexo == 'M') {
            $nome .= ' | <span class="label label-primary"><i class="fa fa-male"></i></span>';
        } else if($pessoa->sexo == 'F') {
            $nome .= ' | <span class="label label-danger"><i class="fa fa-female"></i></span>';
        } else {
            $nome .= ' | <span class="label label-default">N/I</span>';
        }
        
        if ($pessoa->dt_nascimento != '0000-00-00' && $pessoa->dt_nascimento != "") {
            
            list($ano, $mes, $dia) = explode('-', $pessoa->dt_nascimento);
            $hoje       = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            $nascimento = mktime(0, 0, 0, $mes,      $dia,      $ano);
            $idade      = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

            $nome .= ' | <spam class="label label-success">'.$idade.'</spam>';
        } else {
            $nome .= ' | <spam class="label label-default">N/I</spam>';                
        }                

        if ($pessoa->natureza_juridica == 'F') {
            $natureza = '<spam class="label label-primary">Fisica</spam>';
        } else {
            $natureza = '<spam class="label label-warning">Juridica</spam>';                
        }

        if ($pessoa->situacao == 'ATIVO') {
            $situacao = '<spam class="label label-success">Ativo</spam>';
        } elseif ($pessoa->situacao == 'INATIVO') {
            $situacao = '<spam class="label label-default">Inativo</spam>';
        } elseif ($pessoa->situacao == 'EXCLUIDO') {
            $situacao = '<spam class="label label-danger">Excluido</spam>';
        } else {
            $situacao = '<spam class="label label-default">'.$pessoa->situacao.'</spam>';
        }

        $datas  = '<p class="small">';
        $datas .= $pessoa->doacao_primeira;
        $datas .= ' | ';
        $datas .= $pessoa->doacao_ultimo;
        $datas .= '</p>';

        $valor    = str_replace('.', ',', $pessoa->doacao_valor); 
        $valor    = '<p class="small">'.$valor.'</p>';
        $cpf_cnpj = '<p class="small">'.$pessoa->cpf_cnpj.'</p>';
        $qtde     = '<p class="small">'.$pessoa->doacao_quantidade.'</p>';

        $dados = array('id'              => $pessoa->id,
                       'nome'            => $nome,
                       'cpf_cnpj'        => $cpf_cnpj,
                       'dt_nascimento'   => $pessoa->dt_nascimento,
                       'natureza'        => $natureza,
                       'tipo'            => $tipo,
                       'situacao'        => $situacao,
                       'doacao_primeira' => $pessoa->doacao_primeira,
                       'doacao_ultimo'   => $pessoa->doacao_ultimo,
                       'datas'           => $datas,
                       'qtde'            => $qtde,
                       'valor'           => $valor);

        return $dados;
    }
}
