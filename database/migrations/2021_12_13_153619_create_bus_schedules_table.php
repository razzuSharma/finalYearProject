<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('bus_id');
            $table->integer('operator_id');
            $table->integer('Initial_city_id');
            $table->integer('Destination_id');
            $table->time('Departure_time');
            $table->time('Arrival_time');
            $table->integer('Fare');
            $table->string('pickup_address');
            $table->string('dropoff_address');
            
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
        Schema::dropIfExists('bus_schedules');
    }
}
