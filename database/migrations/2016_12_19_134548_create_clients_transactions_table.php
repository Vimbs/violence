<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clients_transactions', function (Blueprint $table) {
          $table->string('transaction_id')->index();
          $table->string('company_name')->string();
          $table->string('contact_person')->string();
          $table->integer('phone_number')->integer();
          $table->string('email_address')->string();
          $table->string('account_executive_name')->string();
          $table->string('product')->string();
          $table->string('month')->string();
          $table->integer('year')->integer();
          $table->string('transaction_type')->string();
          $table->string('amount')->string();
          $table->string('account_status')->string();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('clients_transactions');
    }
}
