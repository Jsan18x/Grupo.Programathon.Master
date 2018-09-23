<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroMenoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_menores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula');
            $table->integer('edad');
            $table->char('genero');
            $table->text('medicinas');
            $table->text('tratamientos');
            $table->text('enfermedades');
            $table->unsignedInteger('etnia_id');
            $table->unsignedInteger('parentesco_id');
            $table->timestamps();

            $table->foreign('etnia_id') -> reference('id') -> on ('etnias');
            $table->foreign('parentesco_id') -> reference('id') -> on ('parentescos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_menores');
    }
}
