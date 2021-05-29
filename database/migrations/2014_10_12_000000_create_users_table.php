<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Nombre completo del usuario');
            $table->string('email')->unique()->comment('correo');
            $table->timestamp('email_verified_at')->nullable()->comment('confirmar correo   ');
            $table->string('password')->comment('Clave encriptada');
            $table->rememberToken()->comment('Token de validaci');
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
        Schema::dropIfExists('users');
    }
}
