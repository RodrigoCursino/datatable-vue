<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bancos')) {        
            Schema::create('bancos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 25);
                $table->integer('numero');
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
        Schema::dropIfExists('bancos');
    }
}
