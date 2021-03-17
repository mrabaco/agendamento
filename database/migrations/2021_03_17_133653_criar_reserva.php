<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarReserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('id_reserva');
            $table->integer('id_usuario');
            $table->string('nome_atividade');
            $table->string('nome_solicitante');
            $table->string('e-mail');
            $table->string('telefone');
            $table->string('departamento');
            $table->string('descricao_atividade');
            $table->string('obs');            
            $table->integer('id_unidade');
            $table->string('status');        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
