<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('ad_id');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('category_id')->on('categories');
			$table->string('random_id', 32);
			$table->string('url', 50)->unique();
			$table->string('title', 50);
			$table->string('salary', 100)->nullable();
			$table->string('place', 15)->nullable();
			$table->text('description');
			$table->text('skills')->nullable();
			$table->string('duration', 100)->nullable();
			$table->string('languages', 50)->nullable();
			$table->string('contact_first_name', 50);
			$table->string('contact_last_name', 50);
			$table->string('contact_email', 75);
			$table->string('contact_phone', 20)->nullable();
			$table->date('starts_at');
			$table->date('ends_at')->nullable();
			$table->dateTime('expires_at');
			$table->boolean('is_validated')->default(false);
			$table->dateTime('validated_at')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ads');
	}

}
