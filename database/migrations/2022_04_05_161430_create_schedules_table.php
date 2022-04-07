<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignid('bus_id')->constrained();
            $table->foreignid('operator_id')->constrained();
            $table->foreignid('city_id')->constrained();
            $table->foreignid('destination_id')->constrained();
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('return_time');  
            $table->date('return_date');
            $table->string('pickup_point');
            $table->string('drop_point');
            $table->integer('fare');
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
