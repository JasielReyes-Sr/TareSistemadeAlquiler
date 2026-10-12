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
        Schema::create('_empleado', function (Blueprint $table) {
            $table->bigIncrements('Id_Empleado');
            $table->string('Password');
            $table->string('Nombre_Empleado');
            $table->string('Telefono')->unique(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_empleado');
    }
};
