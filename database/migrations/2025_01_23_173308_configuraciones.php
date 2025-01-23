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
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_invitacion')->nullable();
            $table->string('papa_novio')->nullable();
            $table->string('mama_novio')->nullable();
            $table->string('papa_novia')->nullable();
            $table->string('mama_novia')->nullable();
            $table->string('padrino')->nullable();
            $table->string('madrina')->nullable();
            $table->string('titulo_mesa')->nullable();
            $table->string('mensaje')->nullable();
            $table->string('mesa')->nullable();
            $table->string('mensaje_whatsapp')->nullable();
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
