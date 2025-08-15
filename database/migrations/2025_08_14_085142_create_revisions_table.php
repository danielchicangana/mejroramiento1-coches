<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('filtro');
            $table->string('aceite');
            $table->string('frenos');

            
            $table->unsignedBigInteger('coche_id');
            $table->foreign('coche_id')
                ->references('id')
                ->on('coches')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('revisions');
    }
};
