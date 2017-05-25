<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 190);
			$table->string('alias', 190)->unique();
			$table->string('h1', 100)->nullable();
			$table->text('description')->nullable();
			$table->text('text')->nullable();
			$table->integer('authorId');
			$table->integer('statusId');
			$table->string('metaTitle', 190)->nullable();
			$table->string('metaKeywords', 190)->nullable();
			$table->string('metaDescription', 190)->nullable();
			$table->integer('categoryId');
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
		Schema::drop('articles');
	}

}
