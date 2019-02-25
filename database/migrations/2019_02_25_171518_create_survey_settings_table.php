<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_settings', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('survey_id');
            $table->foreign('survey_id')->references('id')->on('surveys');

            $table->boolean('combination')->default(false);
            $table->boolean('single')->default(false);
            $table->boolean('unordered')->default(false);

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
        Schema::dropIfExists('survey_settings');
    }
}
