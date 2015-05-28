<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table){
			$table->increments('id');
			$table->string('title', 220);
			$table->string('slug', 255);
			$table->integer('user_id')->unsigned();
			$table->text('content');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('attachments', function(Blueprint $table){
			$table->increments('id');
			$table->string('path');
			$table->string('info');
			$table->integer('user_id')->unsigned()->nullable();
			$table->timestamps();
			$table->morphs('attachable');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
		Schema::drop('attachments');
	}

}
