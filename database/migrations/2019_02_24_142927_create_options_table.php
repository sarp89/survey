<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions');

            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');

            $table->double('weight', 3, 2)->default(1);
            $table->unsignedInteger('number')->nullable();
            $table->longText('text');

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
        Schema::dropIfExists('options');
    }
}
