<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('projetos')) {        
            Schema::create('projetos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 25);
                $table->integer('id_centro_custo');
                $table->integer('id_financiador');                
                $table->integer('id_pessoa');
                $table->date('inicio')->nullable();
                $table->date('termino')->nullable();
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
        Schema::dropIfExists('projetos');
    }
}
