<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAsPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_as_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_employee")->unsigned();
            $table->foreign('id_employee')->references('id')->on('employees');
            $table->integer("id_position")->unsigned();
            $table->foreign('id_position')->references('id')->on('positions');
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
        Schema::dropIfExists('employee_as_positions');
    }
}
