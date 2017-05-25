<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('articles_categories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name', 190);
            $table->string('alias')->unique();
            $table->integer('parentId');
            $table->text('description')->nullable();
            $table->integer('authorId');
            $table->integer('statusId');
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
        Schema::drop('articles_categories');
	}

}
