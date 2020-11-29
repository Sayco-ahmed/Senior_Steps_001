<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('labNumber', 250)->nullable();
            $table->string('pcsNumber', 250)->nullable();
            $table->string('chairsNumber', 250)->nullable();
            $table->string('additiveChairs', 250)->nullable();
            $table->text('labImg')->nullable();
            $table->text('notes')->nullable();
            $table->BigInteger('branchId')->unsigned()->nullable();
 
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
        Schema::dropIfExists('labs');
    }
}
