<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranges', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('result_id');
            $table->foreign('result_id')->references('id')->on('results');

            $table->unsignedInteger('subtype_id');
            $table->foreign('subtype_id')->references('id')->on('subtypes');

            $table->double('from', 3, 2);
            $table->double('to', 3, 2);

            $table->string('name');
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
        Schema::dropIfExists('ranges');
    }
}
