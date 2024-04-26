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
            $table->id();
            $table->string('Nombre',45);
            $table->string('Apellido',45);
            $table->string('Direccion',45);
            $table->string('Ciudad',45);
            $table->unsignedBigInteger('coche_id')->unique();

            $table->foreign('coche_id')
            ->references('id')
            ->on('coches')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
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
