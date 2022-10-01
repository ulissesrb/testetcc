<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 255)->unique();
            $table->string('razao_social', 255)->unique();
            $table->string('area_atuacao', 30);
            $table->string('cnpj', 20)->unique();
            $table->integer('num_funcionarios')->unsigned();
            $table->string('cep', 100)->unique();
            $table->string('email', 255)->unique();
            $table->boolean('excluido');
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
        Schema::dropIfExists('empresas');
    }
}
