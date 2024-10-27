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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre_producto', 100);
            $table->text('descripcion');
            $table->decimal('precio', 10,2);
            $table->integer('stock')->default(0);
            $table->Foreignid('id_categoria')->nullable()->constrained('categorias', 'id_categoria');
            $table->foreignid('id_proveedor')->nullable()->constrained('proveedores', 'id_proveedor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
