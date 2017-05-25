<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('articles_images', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('articleId');
            $table->string('title', 190);
            $table->string('filename', 190);
            $table->string('mime', 30);
            $table->string('ext', 5);
            $table->string('size', 190);
            $table->integer('statusId');
            $table->integer('authorId');
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
        Schema::drop('articles_images');
	}

}
