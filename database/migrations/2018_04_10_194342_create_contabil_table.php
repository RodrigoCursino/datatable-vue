<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContabilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contas_contabil')) {        
            Schema::create('contas_contabil', function(Blueprint $table) {
                $table->increments('id');
                $table->string('codigo', 50);            
                $table->string('nome', 200);
                $table->integer('movimenta')->nullable();                        
                $table->integer('conta_contabil_pai')->nullable();                        
                $table->string('natureza', 1)->nullable();
                $table->string('codigo_contabilidade', 50)->nullable();
                $table->integer('nivel')->nullable();
                $table->string('a_s', 2)->nullable();
                $table->string('radical', 50)->nullable();
                $table->integer('id_evento_contabil')->nullable();
                $table->integer('url_agradecimento')->nullable();
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
        Schema::dropIfExists('contas_contabil');        
    }
}
