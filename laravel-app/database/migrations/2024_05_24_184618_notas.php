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
        Schema::create('notas', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('consulta');
            $table->unsignedBigInteger('psicologo');
            $table->foreign('consulta')->references('id')->on('consultas');
            $table->foreign('psicologo')->references('id')->on('users');
            $table->text('nota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
