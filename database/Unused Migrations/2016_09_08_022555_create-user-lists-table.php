<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('list_id');
            $table->integer('book_id')->unsigned();
            // $table->foreign('book_id')
            //       ->references('book_id')
            //       ->on('books')
            //       ->onDelete('cascade');
            $table->string('book_order');
            $table->string('list_items');
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
        Schema::dropIfExists('usersLists');
    }
}
