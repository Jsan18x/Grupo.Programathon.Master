<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesMenoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_menores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('menor_id');
            $table->string('adjunto');
            $table->text('adjuntoTexto');
            $table->string('url');
            $table->text('urlTexto');
            $table->string('adjuntoCamara');
            $table->text('camaraTexto');
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
        Schema::dropIfExists('antecedentes_menores');
    }
}
