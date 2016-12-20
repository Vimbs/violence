<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountExecutivesSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('account_executives_sales', function (Blueprint $table) {
          $table->string('account_executive_id')->index();
          $table->string('account_executive_name')->string();
          $table->string('product_sold')->string();
          $table->string('month')->string();
          $table->integer('year')->integer();
          $table->double('amount')->double();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('account_executive_sales');
    }
}
