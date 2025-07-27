<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // nome
            $table->string('name');
            // telefone
            $table->string('phone');
            // email
            $table->string('email')->unique();
            // cidade_estado
            $table->string('city_state');
            // categoria
            $table->enum('category', ['Aluno', 'Responsável', 'Professor', 'Funcionário', 'Gestor']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
