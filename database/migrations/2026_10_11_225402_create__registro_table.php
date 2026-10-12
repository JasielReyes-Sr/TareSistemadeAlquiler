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
        Schema::create('_registro', function (Blueprint $table) {
            $table->bigIncrements('Id_Registro');
            $table->date('Fecha_Solicitud');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Final');
            $table->enum('Estado_Alquiler', ['Activo', 'Finalizado', 'Cancelado']);
            $table->foreignId('Id_Cliente')->constrained('_cliente', 'Id_Cliente');
            $table->foreignId('Id_Empleado')->constrained('_empleado', 'Id_Empleado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_registro');
    }
};
