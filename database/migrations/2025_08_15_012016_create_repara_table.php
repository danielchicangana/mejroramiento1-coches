<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('repara', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_reparacion');
            $table->integer('horas');

            //  coche
            $table->unsignedBigInteger('coche_id');
            $table->foreign('coche_id')
                ->references('id')
                ->on('coches')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // mecanico
            $table->unsignedBigInteger('mecanico_id');
            $table->foreign('mecanico_id')
                ->references('id')
                ->on('mecanicos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repara');
    }
};
