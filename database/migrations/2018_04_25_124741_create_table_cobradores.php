<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCobradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cobradores')) {        
            Schema::create('cobradores', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 100);
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
        Schema::dropIfExists('cobradores');                
    }
}
