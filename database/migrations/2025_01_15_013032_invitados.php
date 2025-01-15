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
        Schema::create('invitados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('telefono')->nullable();
            $table->string('telefono_personal')->nullable();
            $table->string('adultos')->nullable();
            $table->string('ninos')->nullable();
            $table->boolean('asistiran')->nullable();
            $table->string('adultos_accep')->nullable();
            $table->string('ninos_accep')->nullable();
            $table->string('comentario')->nullable();
            $table->string('comentario_personal')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitados');
    }
};
