<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
              $table->integer('user_id')->unsigned()->index();
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
              $table->string('title',100);
              $table->string('name',100);
              $table->integer('size');
              $table->string('image',100);
              $table->text('abstract');
              $table->text('content');
              $table->boolean('status')->default(false);
              $table->timestamps();
              $table->integer('numbers_of_views');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
