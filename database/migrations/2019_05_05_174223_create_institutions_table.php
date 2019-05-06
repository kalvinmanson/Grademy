<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('institutions', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('picture')->nullable();
        $table->string('category')->nullable();
        $table->integer('employes')->default(0);
        $table->text('description')->nullable();
        $table->string('country')->default('co');
        $table->string('city')->nullable();
        $table->string('address')->nullable();
        $table->string('location')->nullable();
        $table->string('phone')->nullable();
        $table->string('email')->nullable();
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
        Schema::dropIfExists('institutions');
    }
}
