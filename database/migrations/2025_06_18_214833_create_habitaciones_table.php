<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id('id_habitacion'); //numero id de la habitacion
            $table->integer('tipo'); //tipo de habitacion 
            $table->string('descripcion', 100); //descripcion de la habitacion
            $table->decimal('precio', 10, 2); //precio de la habitacion
            $table->integer('estado'); //estado de la habitacion
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
