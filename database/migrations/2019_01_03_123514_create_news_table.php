<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('newsTitle');
            $table->text('description');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('newsCategory_id');
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('newsCategory_id')->references('id')->on('newsCategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}
