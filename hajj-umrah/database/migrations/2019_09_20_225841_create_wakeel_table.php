<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWakeelTable extends Migration {

	public function up()
	{
		Schema::create('wakeel', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('wakeel');
	}
}