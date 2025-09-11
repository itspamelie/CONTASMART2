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
          Schema::create('practices', function (Blueprint $table) {
            $table->increments("id");//
            $table->mediumText('titulo');            
            //llave foranea de users
            $table->foreignId('user_id')->constrained('users');
            //llave foranea  de years
            $table->foreignId('year_id')->constrained('years');
        });
    }

    public function down(): void
    {
        //
    }
};
