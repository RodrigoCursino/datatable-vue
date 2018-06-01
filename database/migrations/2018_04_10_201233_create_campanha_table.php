<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('campanhas')) {        
            Schema::create('campanhas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 100);
                $table->date('inicio')->nullable();
                $table->date('fim')->nullable();
                $table->longText('descricao');
                $table->string('tag', 30)->nullable();
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
        Schema::dropIfExists('campanhas');        
    }
}
