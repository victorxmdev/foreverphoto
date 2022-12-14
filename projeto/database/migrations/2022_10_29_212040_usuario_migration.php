<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function($table){
            $table->id();
            $table->string('nome_usuario', 15);
            $table->string('sobrenome_usuario', 40);
            $table->string('nmuser_usuario', 15);
            $table->string('rua_usuario', 100);
            $table->string('bairro_usuario', 20);
            $table->string('num_casa_usuario', 6);
            $table->string('complemento_usuario', 30);
            $table->string('uf_usuario', 2);
            $table->string('cidade_usuario', 20);
            $table->string('telefone_usuario', 11);
            $table->string('email_usuario', 30);
            $table->string('senha_usuario', 100);
            $table->string('tipo_usuario', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
