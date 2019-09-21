<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeparturesTable extends Migration {

	public function up()
	{
		Schema::create('departures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('trip_info_id')->unsigned();
			$table->string('wakeel_name', 50)->nullable();
			$table->integer('pilgram_count');
			$table->string('nationality', 50);
			$table->string('hotel', 50)->nullable();
			$table->integer('direction_id')->unsigned();
			$table->string('departure_time', 50)->nullable();
			$table->string('departure_date', 50)->nullable();
			$table->string('journey_number', 50)->nullable();
			$table->string('advance_standby', 50)->nullable();
			$table->string('day', 30)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('departures');
	}
}