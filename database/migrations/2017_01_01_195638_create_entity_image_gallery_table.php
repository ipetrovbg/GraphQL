<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityImageGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleriable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
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
        Schema::dropIfExists('galleriable');
    }
}
