<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdRndRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_rnd_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('studentId')->unsigned()->nullable();
            $table->BigInteger('roundId')->unsigned()->nullable();
            $table->BigInteger('requestTypeId')->unsigned()->nullable();
            $table->date('requestDate')->nullable();
            $table->text('requestNotes')->nullable();

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
        Schema::dropIfExists('std_rnd_requests');
    }
}
