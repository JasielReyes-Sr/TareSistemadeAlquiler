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
        Schema::create('_equipo', function (Blueprint $table) {
            $table->bigIncrements('Id_Equipo');
            $table->string('Nombre_Equipo');
            $table->text('Descripcion')->nullable();
            $table->string('Marca');
            $table->decimal('PrecioDia', 10, 2);
            $table->enum('Estado', ['Disponible', 'En Mantenimiento', 'No Disponible']);
            $table->integer('Cantidad');
            $table->foreignId('Id_Categoria')->constrained('_categoria', 'Id_Categoria');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_equipo');
    }
};
