<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarPeriodo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo', function (Blueprint $table) {
            $table->bigIncrements('id_periodo');
            $table->integer('id_reserva');
            $table->string('id_instancia');
            $table->dateTime('data', $precision = 0);
            $table->boolean('hora_0');
            $table->boolean('hora_1');
            $table->boolean('hora_2');
            $table->boolean('hora_3');
            $table->boolean('hora_4');
            $table->boolean('hora_5');
            $table->boolean('hora_6');
            $table->boolean('hora_7');
            $table->boolean('hora_8');
            $table->boolean('hora_9');
            $table->boolean('hora_10');
            $table->boolean('hora_11');
            $table->boolean('hora_12');
            $table->boolean('hora_13');
            $table->boolean('hora_14');
            $table->boolean('hora_15');
            $table->boolean('hora_16');
            $table->boolean('hora_17');
            $table->boolean('hora_18');
            $table->boolean('hora_19');
            $table->boolean('hora_20');
            $table->boolean('hora_21');
            $table->boolean('hora_22');
            $table->boolean('hora_23');   
                   
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodo');
    }
}
