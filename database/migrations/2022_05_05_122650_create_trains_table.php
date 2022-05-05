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
            $table->string('Stazione di partenza', 50)->nullable();
            $table->string('Stazione di arrivo', 50)->nullable();
            $table->time('Orario di partenza')->nullable();
            $table->time('Orario di arrivo')->nullable();
            $table->smallInteger('Codice Treno')->nullable();
            $table->tinyInteger('Numero Carrozze')->nullable();
            $table->string('In orario', 10)->nullable();
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
