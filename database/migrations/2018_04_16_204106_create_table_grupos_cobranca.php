<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGruposCobranca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('grupos_cobranca')) {        
            Schema::create('grupos_cobranca', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('grupo');
                $table->integer('id_conta_bancaria');
                $table->integer('id_conta_contabil');                
                $table->integer('id_centro_custo');
                $table->date('cobranca')->nullable();
                $table->string('descricao', 200)->nullable();
                $table->string('mensagem', 200)->nullable();
                $table->string('instrucao1', 200)->nullable();
                $table->string('instrucao2', 200)->nullable();
                $table->date('referencia')->nullable();
                $table->date('mandar_proximo')->nullable();
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
        Schema::dropIfExists('grupos_cobranca');
    }
}
