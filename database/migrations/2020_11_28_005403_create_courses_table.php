<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('courseEnName', 250)->nullable();
            $table->string('courseArName', 250)->nullable();
            $table->longText('courseArDesc')->nullable();
            $table->longText('courseEnDesc')->nullable();
            $table->integer('courseHours')->nullable();
            $table->float('courseFees', 10,2 )->nullable();
            $table->text('coursePdf')->nullable();
            $table->text('courseImg')->nullable();
            $table->text('courseNotes')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
