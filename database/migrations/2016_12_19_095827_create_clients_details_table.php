<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clients_details', function (Blueprint $table) {
          $table->string('client_id')->index();
          $table->string('company_name')->string();
          $table->string('company_address')->string();
          $table->string('industry')->string();
          $table->string('contact_person')->string();
          $table->integer('phone_number')->integer();
          $table->string('email_address')->string();


        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients_details');
    }
  }
