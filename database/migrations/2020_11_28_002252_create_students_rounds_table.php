<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_rounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('studentId')->unsigned()->nullable();
            $table->BigInteger('roundId')->unsigned()->nullable();
            $table->float('studentRoundFees', 10, 2)->nullable();
            $table->text('notes')->nullable();


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
        Schema::dropIfExists('students_rounds');
    }
}
