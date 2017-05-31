<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tags_id')->unsigned();
            $table->foreign('tags_id')->references('id')->on('tags');
            $table->integer('taggable_id')->unsigned();
            $table->string('taggable_type');
            $table->softDeletes();
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
        Schema::dropIfExists('entity_tags');
    }
}
