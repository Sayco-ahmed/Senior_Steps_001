<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullNameAr', 250)->nullable();
            $table->string('fullNameEn', 250)->nullable();
            $table->string('mobile', 250)->nullable();
            $table->string('whatsapp', 250)->nullable();
            $table->text('education')->nullable();
            $table->BigInteger('cityId')->unsigned()->nullable();
            $table->BigInteger('countryId')->unsigned()->nullable();
            $table->BigInteger('studentStatusId')->unsigned()->nullable();
            $table->BigInteger('facultyId')->unsigned()->nullable();
            $table->BigInteger('unversityId')->unsigned()->nullable();
            $table->BigInteger('nationalityId')->unsigned()->nullable();
            $table->BigInteger('reachSourceId')->unsigned()->nullable();
            $table->string('email', 250)->nullable();
            $table->string('job', 250)->nullable();
            $table->string('company', 250)->nullable();
            $table->date('birthdate')->nullable();
            $table->text('address')->nullable();
            $table->text('facebookAccnt')->nullable();
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
        Schema::dropIfExists('students');
    }
}
