<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ndato');
            $table->string('TipoIdentificacion');
            $table->string('Rsocial');
            $table->string('DireccionC');
            $table->string('correo');
            $table->string('celular');
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
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
        Schema::dropIfExists('Clientes');
    }
}
