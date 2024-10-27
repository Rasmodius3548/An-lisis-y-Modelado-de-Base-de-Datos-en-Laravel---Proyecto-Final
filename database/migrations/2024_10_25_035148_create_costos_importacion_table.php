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
        Schema::create('costos_importacion', function (Blueprint $table) {
            $table->id('costos_importacion');
            $table->decimal('costo_adicional', 10, 2);
            $table->text('regulaciones');
            $table->date('fecha_importacion');
            $table->foreignid('id_producto')->constrained('productos', 'id_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costos_importacion');
    }
};
