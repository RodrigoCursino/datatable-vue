<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCentroCusto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('centro_custo')) {        
            Schema::create('centro_custo', function(Blueprint $table) {
                $table->increments('id');
                $table->string('codigo', 100);
                $table->string('nome', 100);
                $table->integer('centro_custo_pai')->nullable();                
                $table->string('codigo_contabilidade', 100);
                $table->integer('nivel');                                
                $table->string('radical', 10);
                $table->integer('id_unidade');
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
        Schema::dropIfExists('centro_custo');
    }
}
