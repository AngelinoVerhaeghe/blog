<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->longText('description');
            /* $table->string('image_path'); */
            $table->unsignedBigInteger('user_id'); //? Link users table with posts table
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id'); //? Link categories table with posts table
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('photo_id');
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
        Schema::dropIfExists('posts');
    }
}
