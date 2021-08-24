<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10);
            $table->string('marca', 14);
            $table->string('color', 20);
            $table->string('tdv', );
            $table->unsignedBigInteger('propietario_id');
            $table->foreign('propietario_id')->references('id')->on('propietarios');
            $table->unsignedBigInteger('conductors_id');
            $table->foreign('conductors_id')->references('id')->on('conductors');
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
        Schema::dropIfExists('vehiculos');
    }
}
