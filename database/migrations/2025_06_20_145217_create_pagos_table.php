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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->decimal('total', 10, 2);
            $table->integer('metodo_pago');
            $table->datetime('fecha_pago')->default(now());
            $table->unsignedBigInteger('id_reserva');

            // Definir la clave foránea al final
            $table->foreign('id_reserva')
                ->references('id_reserva')
                ->on('reservas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
