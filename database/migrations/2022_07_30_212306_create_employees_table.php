<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',15);
            $table->string('lastname',15);
            $table->string('identification',12)->unique();
            $table->string('address',50);
            $table->bigInteger('phone')->unique()->length(12);
            $table->integer("manager")->unsigned();
            $table->foreign('manager')->references('id')->on('employees');
            $table->integer("id_cityBirth");
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
        Schema::dropIfExists('employees');
    }
}
