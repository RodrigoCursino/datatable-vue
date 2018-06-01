<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('fornecedores')) {        
            Schema::create('fornecedores', function(Blueprint $table) {
                $table->increments('id');
                $table->string('codigo', 10);
                $table->string('nome', 120);
                $table->string('nome_fantasia', 120);
                $table->string('cnpj', 15);
                $table->string('inscricao', 25)->nullable();
                $table->string('inscricao_municipal', 25)->nullable();
                $table->string('logradouro', 100)->nullable();
                $table->string('numero', 10)->nullable();
                $table->string('complemento', 100)->nullable();
                $table->string('bairro', 100)->nullable();
                $table->string('cidade', 100)->nullable();
                $table->string('uf', 2)->nullable();
                $table->string('pais', 25)->nullable();
                $table->string('cep', 10)->nullable();
                $table->string('fone1', 20)->nullable();
                $table->string('fone2', 20)->nullable();
                $table->string('fax', 20)->nullable();
                $table->string('celular', 20)->nullable();
                $table->string('email', 100)->nullable();
                $table->string('natureza_juridica', 1)->nullable();
                $table->string('contato', 100)->nullable();
                $table->string('contato2', 100)->nullable();
                $table->string('tratamento', 25)->nullable();
                $table->string('tratamento2', 25)->nullable();
                $table->string('observacao', 200)->nullable();
                $table->integer('id_conta_contabil')->nullable();
                $table->integer('banco')->nullable();
                $table->string('agencia', 10)->nullable();
                $table->string('agencia_digito', 10)->nullable();
                $table->string('conta', 10)->nullable();
                $table->string('conta_digito', 10)->nullable();
                $table->string('ramo_atividade', 10)->nullable();
                $table->integer('grupo')->nullable();
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
        Schema::dropIfExists('fornecedores');                
    }
}
