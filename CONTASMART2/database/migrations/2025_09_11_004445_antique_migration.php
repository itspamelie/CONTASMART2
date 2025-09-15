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
        Schema::create('antiques', function (Blueprint $table) {
            $table->id();
            $table->integer('dias_vacaciones');
            $table->decimal('prima_vacacional');
            $table->decimal('dias_aguinaldo');
            $table->decimal('factor');
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
