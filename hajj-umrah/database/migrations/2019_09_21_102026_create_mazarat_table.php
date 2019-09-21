<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMazaratTable extends Migration {

	public function up()
	{
		Schema::create('mazarat', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('trip_info_id')->unsigned();
			$table->string('wakeel_name', 50)->nullable();
			$table->integer('pilgram_count')->nullable();
			$table->string('nationality', 50)->nullable();
			$table->integer('hotel')->nullable();
			$table->integer('direction_id')->unsigned();
			$table->string('mazar_time', 50)->nullable();
			$table->string('mazar_date', 50)->nullable();
			$table->string('journey_number', 50)->nullable();
			$table->string('advance_standby', 50)->nullable();
			$table->string('day', 30)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('mazarat');
	}
}