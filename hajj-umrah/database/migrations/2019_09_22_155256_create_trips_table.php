<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripsTable extends Migration {

	public function up()
	{
		Schema::create('trips', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('trip_info_id')->unsigned()->nullable();
			$table->string('wakeel_name', 50)->nullable();
			$table->integer('pilgram_count')->nullable();
			$table->string('nationality', 50)->nullable();
			$table->string('hotel', 50)->nullable();
			$table->integer('direction_id')->unsigned()->nullable();
			$table->string('time', 50)->nullable();
			$table->string('date', 50)->nullable();
			$table->string('trip_number', 50)->nullable();
			$table->string('advance_standby', 50)->nullable();
			$table->string('day', 30)->nullable();
			$table->integer('trip_type_id')->unsigned()->nullable();
			$table->boolean('completed')->default(0); 
		});
	}

	public function down()
	{
		Schema::drop('trips');
	}
}