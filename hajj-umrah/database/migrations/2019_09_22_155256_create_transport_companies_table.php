<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransportCompaniesTable extends Migration {

	public function up()
	{
		Schema::create('transport_companies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->integer('phone');
			$table->string('driver_name', 50);
			$table->string('driver_id', 15);
			$table->string('car_plate', 10);
			$table->integer('trip_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('transport_companies');
	}
}