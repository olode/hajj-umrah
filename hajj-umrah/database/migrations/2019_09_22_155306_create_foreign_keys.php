<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('trips', function(Blueprint $table) {
			$table->foreign('trip_info_id')->references('id')->on('trip_info')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('trips', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('directions')
						->onDelete('restrict')
						->onUpdate('no action');
		});
		Schema::table('trips', function(Blueprint $table) {
			$table->foreign('trip_type_id')->references('id')->on('trip_types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('transport_companies', function(Blueprint $table) {
			$table->foreign('trip_id')->references('id')->on('trips')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('representatives', function(Blueprint $table) {
			$table->foreign('trip_id')->references('id')->on('trips')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('trips', function(Blueprint $table) {
			$table->dropForeign('trips_trip_info_id_foreign');
		});
		Schema::table('trips', function(Blueprint $table) {
			$table->dropForeign('trips_direction_id_foreign');
		});
		Schema::table('trips', function(Blueprint $table) {
			$table->dropForeign('trips_trip_type_id_foreign');
		});
		Schema::table('transport_companies', function(Blueprint $table) {
			$table->dropForeign('transport_companies_trip_id_foreign');
		});
		Schema::table('representatives', function(Blueprint $table) {
			$table->dropForeign('representatives_trip_id_foreign');
		});
	}
}