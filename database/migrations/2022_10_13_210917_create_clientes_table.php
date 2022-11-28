<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidimage.png
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono', 10);
            $table->string('email')->unique();
            // campo de tipo fecha para la verficicación del email que podrá ser nulo1.
            $table->timestamp('email_verified_at')->nullable();
            // creará una columna de tipo string con un tamaño de 100 caracteres y que podrá ser nulo
            $table->rememberToken();
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
        Schema::dropIfExists('clientes');
    }
}