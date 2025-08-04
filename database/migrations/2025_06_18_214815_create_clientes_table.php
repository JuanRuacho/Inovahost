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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente'); // Definición del ID del cliente
            $table->string('nombre', 100); // Nombre del cliente
            $table->string('email', 100)->unique(); // Email del cliente, debe ser único
            $table->string('clave', 256); // Clave debe ser suficientemente larga para almacenar un hash
            $table->string('telefono', 15)->unique();// Teléfono del cliente, debe ser único
            $table->string('direccion', 255)->nullable(); // Dirección del cliente, puede ser nula
            $table->datetime('fecha_registro')->default(now()); // Fecha de registro del cliente, con valor por defecto de la fecha y hora actual
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
