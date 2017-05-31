<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_path', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            $table->string('image_path');
            $table->string('size_key');
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
        Schema::dropIfExists('image_path');
    }
}
