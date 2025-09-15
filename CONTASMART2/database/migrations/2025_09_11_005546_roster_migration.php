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
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->decimal('fondoahorro');
            $table->decimal('salario');
            $table->string('tipo_sueldo');
            $table->decimal('diastrabajadosaguinaldo');
            $table->decimal('horasextrasdoubles');
            $table->decimal('horasextrastriples');
            $table->decimal('cantidadfestivos');
            $table->integer('antiguedad')->nullable(); // o sin nullable si lo quieres obligatorio
            $table->foreignId('id_practica')->constrained('practices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
