<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('unidades')) {
            Schema::create('unidades', function(Blueprint $table) {
                $table->increments('id');
                $table->string('codigo', 10);
                $table->string('razao_social', 200);
                $table->string('nome', 100);
                $table->string('cnpj', 25)->nullable();
                $table->string('inscricao_estadual', 25)->nullable();
                $table->string('inscricao_municipal', 25)->nullable();
                $table->string('logradouro', 120)->nullable();
                $table->string('numero', 20)->nullable();
                $table->string('complemento', 30)->nullable();
                $table->string('bairro', 120)->nullable();
                $table->string('cidade', 120)->nullable();
                $table->string('uf', 2)->nullable();
                $table->string('cep', 9)->nullable();
                $table->string('fone1', 15)->nullable();
                $table->string('fone2', 15)->nullable();
                $table->string('fax', 15)->nullable();
                $table->string('dados_cobranca', 50)->nullable();
                $table->string('observacao', 250)->nullable();
                $table->integer('qtde_aprovacao_pagamento')->nullable();
                $table->integer('id_municipio')->nullable();
                $table->string('situacao')->default('ATIVO');                
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
        Schema::dropIfExists('unidades');
    }
}
