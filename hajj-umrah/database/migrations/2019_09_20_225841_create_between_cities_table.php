<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBetweenCitiesTable extends Migration {

	public function up()
	{
		Schema::create('between_cities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('wakeel_name', 50)->nullable();
			$table->string('pilgram_count', 50)->nullable();
			$table->string('nationality', 50)->nullable();
			$table->string('hotel', 50)->nullable();
			$table->integer('direction_id')->unsigned();
			$table->string('move_time', 50)->nullable();
			$table->string('move_date', 50)->nullable();
			$table->string('journey_number', 50)->nullable();
			$table->string('advance_standby', 50)->nullable();
			$table->string('day', 30)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('between_cities');
	}
}