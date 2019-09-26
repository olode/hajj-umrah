<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripInfoTable extends Migration {

	public function up()
	{
		Schema::create('trip_info', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('info', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('trip_info');
	}
}