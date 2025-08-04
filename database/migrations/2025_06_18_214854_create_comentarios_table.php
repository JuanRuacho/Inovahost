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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('id_comentario');
        $table->unsignedBigInteger('id_cliente');
        $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->string('comentario');
            $table->integer('calificacion');
            $table->timestamp('fecha_comentario');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
