<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaReceberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contas_receber')) {        
            Schema::create('contas_receber', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('id_pessoa');
                $table->integer('id_conta_contabil');
                $table->date('previsao')->nullable();
                $table->date('efetivacao')->nullable();
                $table->date('efetivacao_banco')->nullable();
                $table->decimal('valor', 12,2)->nullable();
                $table->decimal('valor_bruto', 12,2)->nullable();            
                $table->string('currency', 5)->nullable();
                $table->decimal('valor_em_real', 12,2)->nullable();
                $table->integer('id_grupo_cobranca');
                $table->string('mensagem', 255)->nullable();
                $table->dateTime('referencia')->nullable();
                $table->string('identificacao', 30)->nullable();
                $table->longText('observacao')->nullable();
                $table->integer('id_projeto')->nullable();
                $table->integer('id_tipo_pagamento')->nullable();
                $table->integer('id_campanha')->nullable();
                $table->integer('id_conta_bancaria')->nullable();
                $table->string('nosso_numero_banco', 25)->nullable();
                $table->string('digito_nosso_numero', 2)->nullable();
                $table->mediumText('url_cobranca')->nullable();
                $table->mediumText('url_boleto')->nullable();
                $table->string('situacao')->default('ATIVO');
                $table->integer('id_cobranca_online')->nullable();
                $table->integer('id_centro_custo')->nullable();
                $table->string('cod_recebimento', 100)->nullable();
                $table->integer('id_socio')->nullable();
                $table->string('nota_fiscal', 100)->nullable();
                $table->string('cobranca_email', 10)->nullable();
                $table->string('identification', 100)->nullable();
                $table->string('invoice_id', 100)->nullable();       
                $table->timestamps();
            });        
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contas_receber');       
    }
}
