<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('name');
        $table->date('birthdate')->nullable();
        $table->string('gender')->nullable();
        $table->text('bio')->nullable();
        $table->text('academics')->nullable();
        $table->text('experience')->nullable();
        $table->string('document')->nullable();
        $table->string('picture')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('langs')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
