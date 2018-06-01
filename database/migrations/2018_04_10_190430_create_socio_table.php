<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('socios')) {
            Schema::create('socios', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('id_pessoa');
                $table->string('tipo', 20);            
                $table->date('adesao')->nullable();
                $table->date('fim_adesao')->nullable();
                $table->decimal('valor', 12, 2)->nullable();                        
                $table->integer('id_tipo_pagamento');                        
                $table->string('dia_vencimento')->nullable();
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
        Schema::dropIfExists('socios');
    }
}
