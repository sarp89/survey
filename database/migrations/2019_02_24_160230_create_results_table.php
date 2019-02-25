<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('survey_id');
            $table->foreign('survey_id')->references('id')->on('surveys');

            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');

            $table->boolean('ranged')->default(false);
            $table->string('name')->nullable();
            $table->longText('text')->nullable();

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
        Schema::dropIfExists('results');
    }
}
