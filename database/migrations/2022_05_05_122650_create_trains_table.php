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
            /*Azienda
            Stazione di partenza
            Stazione di arrivo
            Orario di partenza
            Orario di arrivo
            Codice Treno
            Numero Carrozze
            In orario
            Cancellato*/
            $table->id();
            $table->string();
            $table->string();
            $table->string();
            $table->time();
            $table->time();
            $table->smallint();
            $table->tinyint();
            $table->string();
            $table->string();
            $table->timestamps();
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
