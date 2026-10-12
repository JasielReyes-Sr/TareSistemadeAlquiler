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
        Schema::create('_alquiler', function (Blueprint $table) {
            $table->bigIncrements('Id_Alquiler');
            $table->integer('Cantidad_Alquilada');
            $table->foreignId('Id_Registro')->constrained('_registro', 'Id_Registro');
            $table->foreignId('Id_Equipo')->constrained('_equipo', 'Id_Equipo');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_alquiler');
    }
};
