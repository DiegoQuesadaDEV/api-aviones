<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviones', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->integer('capacidad');
            $table->double('alcance');
            $table->boolean('estado');
            $table->foreignId('fabricante_id')->constrained('fabricantes');
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
        Schema::dropIfExists('aviones');
    }
};
