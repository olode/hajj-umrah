<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepresentativesTable extends Migration {

	public function up()
	{
		Schema::create('representatives', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->integer('phone');
			$table->string('recipient', 50);
			$table->string('terminator', 50);
			$table->integer('trip_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('representatives');
	}
}