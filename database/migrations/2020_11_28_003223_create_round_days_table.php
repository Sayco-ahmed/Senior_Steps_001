<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('roundId')->unsigned()->nullable();
            $table->BigInteger('dayId')->unsigned()->nullable();
            $table->time('timeForm')->nullable();
            $table->time('timeTo')->nullable();


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
        Schema::dropIfExists('round_days');
    }
}
