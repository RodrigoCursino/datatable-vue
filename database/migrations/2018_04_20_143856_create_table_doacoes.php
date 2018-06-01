<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDoacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('doacoes')) {        
            Schema::create('doacoes', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('id_pessoa');
                $table->integer('id_forma_pagamento');
                $table->integer('id_cobradores');                
                $table->string('codigo_transacao');
                $table->date('dt_recebimento');
                $table->string('resultado')->nullable();
                $table->decimal('valor_bruto', 12,2);
                $table->decimal('valor_liquido', 12,2)->nullable();
                $table->decimal('desconto', 12,2)->nullable();
                $table->decimal('taxa', 12,2)->nullable();
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
        Schema::dropIfExists('doacoes');                
    }
}
