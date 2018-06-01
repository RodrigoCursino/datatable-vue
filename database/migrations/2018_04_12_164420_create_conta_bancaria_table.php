<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaBancariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contas_bancaria')) {        
            Schema::create('contas_bancaria', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 50);
                $table->string('descricao', 120);
                $table->integer('id_banco');
                $table->string('agencia', 15);
                $table->string('numero_conta', 25);
                $table->string('portador', 50)->nullable();
                $table->decimal('saldo', 16,2)->nullable();
                $table->string('codigo_empresa', 35)->nullable();
                $table->string('observacao', 50)->nullable();
                $table->integer('id_conta_contabil')->nullable();
                $table->string('cnab', 120)->nullable();
                $table->string('IDSISCOB', 50)->nullable();
                $table->string('IDPAGFOR', 50)->nullable();
                $table->string('agencia_digito', 11)->nullable();
                $table->string('numero_conta_digito', 11)->nullable();
                $table->string('numero_conta_digito_cnab', 11)->nullable();
                $table->integer('id_unidade');
                $table->string('carteira', 10)->nullable();
                $table->string('cedente', 100)->nullable();
                $table->string('cedente_digito', 10)->nullable();
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
        Schema::dropIfExists('contas_bancaria');                
    }
}
