<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileInterestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_interest', function (Blueprint $table) {
          $table->integer('file_id')->unsigned()->index();
          $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
          $table->integer('interest_id')->unsigned()->index();
          // $table->foreign('resarch_interest_id')->references('id')->on('research_interests');
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
        Schema::drop('file_interest');
    }
}
