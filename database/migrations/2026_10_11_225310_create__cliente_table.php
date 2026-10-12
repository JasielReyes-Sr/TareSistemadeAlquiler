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
        Schema::create('_cliente', function (Blueprint $table) {
            $table->bigIncrements('Id_Cliente');
            $table->string('Nombre_Completo');
            $table->string('Telefono')->unique();
            $table->string('Correo_Electronico')->unique();
            $table->string('Direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cliente');
    }
};
