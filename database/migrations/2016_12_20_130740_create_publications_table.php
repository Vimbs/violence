<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('publications', function (Blueprint $table) {
          $table->string('publication_id')->index();
          $table->string('publication_name')->string();
          $table->string('publiation_month')->string();
          $table->string('publication_year')->string();
          $table->double('publication_cost')->double();
          $table->double('publication_profit')->double();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('publications');
    }

}
