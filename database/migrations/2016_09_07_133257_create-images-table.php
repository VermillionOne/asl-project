<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('imageId')->index();
            $table->integer('userId');
            $table->integer('listId')->unsigned();
            $table->string('imageName');
            $table->string('imageUrl')->unique();
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
        Schema::dropIfExists('images');
    }
}
