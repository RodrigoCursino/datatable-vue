<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tipos_pagamentos')) {
            Schema::create('tipos_pagamentos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('descricao', 100);            
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
        Schema::dropIfExists('tipos_pagamentos');        
    }
}
