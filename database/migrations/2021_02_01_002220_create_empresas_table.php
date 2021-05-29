<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
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
            $table->string('name')->comment('Razon social de la ');
            $table->string('detail')->comment('detalles ');
            $table->text('nit')->comment('idetificacion d'); /** agregar en el modelo */
            $table->text('telefono')->comment('telefono corporativo');  /** agregar en el modelo */
            $table->text('celular')->comment('numero de Celular'); /** agregar en el modelo */
            $table->text('correo corporativo')->comment('correo de la empresa'); /** agregar en el modelo */
            $table->text('direccion')->comment('direccion de la empresa'); /** agregar en el modelo */
            $table->text('represetante')->comment('representate de la empresa'); /** agregar en el modelo */

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
