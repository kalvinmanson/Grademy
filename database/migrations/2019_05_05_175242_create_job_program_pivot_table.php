<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobProgramPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('job_program', function (Blueprint $table) {
        $table->unsignedBigInteger('job_id')->index();
        $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        $table->unsignedBigInteger('program_id')->index();
        $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        $table->primary(['job_id', 'program_id']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_program');
    }
}
