<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('programs', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedInteger('institution_id');
        $table->foreign('institution_id')->references('id')->on('institutions');
        $table->unsignedInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('name');
        $table->string('city')->nullable();
        $table->text('description')->nullable();
        $table->text('pensum')->nullable();
        $table->integer('cost')->nullable();
        $table->string('duration')->nullable();
        $table->string('degree')->nullable();
        $table->string('schedule')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
