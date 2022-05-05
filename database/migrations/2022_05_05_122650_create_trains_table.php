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
            $table->string('Azienda', 100);
            $table->string('Stazione di partenza', 50);
            $table->string('Stazione di arrivo', 50);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->smallint('Codice Treno');
            $table->tinyint('Numero Carrozze');
            $table->string('In orario', 10);
            $table->string('Cancellato', 10);
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
