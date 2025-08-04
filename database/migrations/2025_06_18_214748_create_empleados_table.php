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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado'); // Definición del ID del empleado
            $table->string('nombre', 100); //Nombre del empleado
            $table->string('email', 100)->unique(); // Email del empleado, debe ser único
            $table->string('telefono', 15)->unique(); // Teléfono del empleado, debe ser único
            $table->string('cuenta', 20); // Cuenta del empleado, puede ser un nombre de usuario o identificador
            $table->string('clave', 256); // Clave debe ser suficientemente larga para almacenar un hash
            $table->unsignedBigInteger('id_rol'); // rol del empleado

            $table->foreign('id_rol')
                ->references('id_rol')
                ->on('roles')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
