<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('videoId')->index();
            $table->integer('userId');
            $table->integer('listId')->unsigned();
            $table->string('videoName');
            $table->string('videoUrl')->unique();
            $table->timestamps();

            $table->foreign('listId')
                  ->references('listId')
                  ->on('user_lists')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
