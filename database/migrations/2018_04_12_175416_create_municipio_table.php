<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('municipios')) {
            Schema::create('municipios', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 250);
                $table->string('uf', 2);
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
        Schema::dropIfExists('municipios');        
    }
}
