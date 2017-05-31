<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news');
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
        Schema::dropIfExists('news_gallery');
    }
}
