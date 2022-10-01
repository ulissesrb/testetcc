<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->string('primeiro_porque', 255)->nullable();
            $table->string('segundo_porque', 255)->nullable();
            $table->string('terceiro_porque', 255)->nullable();
            $table->string('quarto_porque', 255)->nullable();
            $table->string('quinto_porque', 255)->nullable();
            $table->boolean('excluido');
            $table->date('excluded_at')->nullable();
            $table->boolean('concluido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problema');
    }
}
