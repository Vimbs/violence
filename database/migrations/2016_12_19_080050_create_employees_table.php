<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->string('employee_id')->index();
          $table->string('employee_name')->index();
          $table->string('employee_dob')->index();
          $table->string('employee_phone_number')->index();
          $table->string('employee_address')->index();
          $table->string('employee_account_number')->index();
          $table->string('employee_position')->index();
          $table->string('employee_starting_date')->index();
          $table->string('employee_resignation_date')->index();

                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('employees');
    }
}
