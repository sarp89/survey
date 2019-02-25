<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('survey_id');
            $table->foreign('survey_id')->references('id')->on('surveys');

            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions');

            $table->unsignedInteger('option_id');
            $table->foreign('option_id')->references('id')->on('options');

            $table->unsignedInteger('participant_id');
            $table->foreign('participant_id')->references('id')->on('participants');

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
        Schema::dropIfExists('answers');
    }
}
