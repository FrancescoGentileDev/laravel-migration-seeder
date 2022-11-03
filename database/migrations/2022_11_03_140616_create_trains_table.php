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
//             Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato

            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('train_code');
            $table->string('carriages');
            $table->string('on_time');
            $table->string('cancelled');
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
