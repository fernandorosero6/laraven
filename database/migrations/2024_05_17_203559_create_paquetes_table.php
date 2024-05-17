<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//  uno a mucho y muchos a muchos camionero paquete uno a muchos, muchos a muchos camionero camion

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('contenido');

            $table->unsignedBigInteger('camionero_id');
            $table->timestamps();

            $table->foreign('camionero_id')
                ->references('id')
                ->on('camioneros')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquetes');
    }
};
