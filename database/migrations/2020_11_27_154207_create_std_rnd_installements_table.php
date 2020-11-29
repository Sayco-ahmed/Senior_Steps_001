<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdRndInstallementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_rnd_installements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('studentId')->unsigned()->nullable();
            $table->BigInteger('roundId')->unsigned()->nullable();
            $table->date('paymentDate')->nullable();
            $table->float('paymentAmount', 10, 2)->nullable();
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
        Schema::dropIfExists('std_rnd_installements');
    }
}
