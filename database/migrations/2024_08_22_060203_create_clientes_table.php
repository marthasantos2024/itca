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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre', 100);
            $table->Integer('edad');
            $table->bigInteger('categoria')->unsigned();//Para relación
            $table->foreign('categoria')->references('codigo')->on('categorias'); // LLave foránea 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

