<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100)->nullable();
            $table->string('Stazione_di_partenza', 50)->nullable();
            $table->string('Stazione_di_arrivo', 50)->nullable();
            $table->time('Orario_di_partenza', 0)->nullable();
            $table->time('Orario_di_arrivo', 0)->nullable();
            $table->mediumInteger('Codice_Treno')->nullable();
            $table->tinyInteger('Numero_Carrozze')->nullable();
            $table->string('In_orario', 10)->nullable();
            $table->string('Cancellato', 10)->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
