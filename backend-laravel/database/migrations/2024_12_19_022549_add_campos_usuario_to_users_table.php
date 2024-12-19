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
        Schema::table('users', function (Blueprint $table) {
                $table->string('nome_completo');
                $table->integer('idade');
                $table->string('telefone');
                $table->string('cpf')->unique();
                $table->date('data_nascimento');
                $table->string('cep');
                $table->string('estado');
                $table->string('cidade');
                $table->string('bairro');
                $table->string('rua');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn([
            'nome_completo', 'idade', 'telefone', 'cpf',
            'data_nascimento', 'cep', 'estado', 'cidade', 'bairro', 'rua']);
    });
}