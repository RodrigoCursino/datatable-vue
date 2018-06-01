<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Doacao extends Model
{
    public function listPessoa($id)
    {
        $doacoes = \DB::table('doacoes')->select(DB::raw("REPLACE(doacoes.valor_bruto, '.', ',') AS valor_bruto,
                                                          REPLACE(doacoes.valor_liquido, '.', ',') AS valor_liquido,
                                                          REPLACE(doacoes.desconto, '.', ',') AS desconto,
                                                          REPLACE(doacoes.taxa, '.', ',') AS taxa,
                                                          DATE_FORMAT(doacoes.dt_recebimento, '%d/%m/%Y') dt_recebimento,
                                                          cobradores.nome"))
                                        ->join('cobradores', 'doacoes.id_cobradores', 'cobradores.id')
                                        ->where('doacoes.id_pessoa', '=', $id)
                                        ->where('doacoes.situacao', '=', 'ATIVO')
                                        ->get();

        return $doacoes;                                        
    }

}
