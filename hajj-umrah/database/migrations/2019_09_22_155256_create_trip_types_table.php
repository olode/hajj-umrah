<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripTypesTable extends Migration {

	public function up()
	{
		Schema::create('trip_types', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('type', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('trip_types');
	}
}