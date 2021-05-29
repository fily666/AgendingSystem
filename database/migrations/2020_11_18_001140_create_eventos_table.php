<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name')->comment('Nombre del evento');
            $table->string('logo')->comment('Imagen del evento');
            $table->date('fechainicial')->comment('Fecha en la que inicia el evento');
            $table->date('fechafinal')->comment('Fecha en la que finaliza el
            evento');
            $table->string('horainicial')->comment('Hora en la que inicia el evento');
            $table->string('horafinal')->comment('Hora en la que Finaliza el
            evento');
            $table->string('duracion')->comment('Tiempo estimado');
            $table->text('detail')->comment('Tiempo estimado');
            $table->timestamps();
            /** los campos Modalidad ,Ubicacion en la migracion   */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
