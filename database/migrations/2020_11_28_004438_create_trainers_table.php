<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trainer_en_name', 250)->nullable();
            $table->string('trainer_ar_name', 250)->nullable();
            $table->string('trainer_mobile', 250)->nullable();
            $table->string('trainer_mobile2', 250)->nullable();
            $table->date('trainer_birthdate')->nullable();
            $table->text('trainer_address')->nullable();
            $table->text('trainerCV')->nullable();
            $table->text('trainerSeniorCV')->nullable();
            $table->text('trainerFbUrl')->nullable();
            $table->text('trainerYoutubeUrl')->nullable();
            $table->text('trainerLinkedinUrl')->nullable();
            $table->string('trainerJob', 250)->nullable();
            $table->string('trainerCompany', 250)->nullable();
            $table->text('trainerImg')->nullable();
            $table->text('trainerNotes')->nullable();
            $table->integer('active')->nullable();



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
        Schema::dropIfExists('trainers');
    }
}
