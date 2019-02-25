<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombinationsResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combinations_results', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('result_id');
            $table->foreign('result_id')->references('id')->on('results');

            $table->unsignedInteger('combination_id');
            $table->foreign('combination_id')->references('id')->on('combinations');

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
        Schema::dropIfExists('combinations_results');
    }
}
