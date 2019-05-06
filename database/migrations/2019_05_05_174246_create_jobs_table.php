<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('jobs', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('institution_id');
        $table->foreign('institution_id')->references('id')->on('institutions');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('name');
        $table->string('city')->nullable();
        $table->text('description')->nullable();
        $table->text('requirements')->nullable();
        $table->integer('vacancies')->default(1);
        $table->string('salary')->nullable();
        $table->string('contract')->nullable();
        $table->string('schedule')->nullable();
        $table->string('tags')->nullable();
        $table->float('rank')->default(0);
        $table->integer('views')->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
