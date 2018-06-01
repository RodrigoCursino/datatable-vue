<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoriasSocio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('categorias_socio')) {        
            Schema::create('categorias_socio', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 100);
                $table->string('tipo', 30);
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
        Schema::dropIfExists('categorias_socio');        
    }
}
