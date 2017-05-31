<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('images_id')->unsigned();
            $table->foreign('images_id')->references('id')->on('images');
            $table->integer('imageable_id')->unsigned();
            $table->string('imageable_type');
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
        Schema::dropIfExists('entity_images');
    }
}
