<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('courseId')->unsigned()->nullable();
            $table->BigInteger('labId')->unsigned()->nullable();
            $table->string('roundName', 250)->nullable();
            $table->date('roundStartDate')->nullable();
            $table->date('roundEndDate')->nullable();
            $table->float('roundStatusId', 6,0 )->nullable();
            $table->float('roundFees', 10,2 )->nullable();
            $table->text('roundNotes')->nullable();
            $table->float('stdRndRequestsId', 6,0 )->nullable();



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
        Schema::dropIfExists('rounds');
    }
}
