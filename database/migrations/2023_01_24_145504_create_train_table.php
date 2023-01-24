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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_hour');
            $table->dateTime('arrival_hour');
            $table->integer('train_code');
            $table->tinyInteger('carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
};
