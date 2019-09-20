<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('arrivals', function(Blueprint $table) {
			$table->foreign('wakeel_id')->references('id')->on('wakeel')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('arrivals', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('directions')
						->onDelete('restrict')
						->onUpdate('no action');
		});
		Schema::table('transport_companies', function(Blueprint $table) {
			$table->foreign('wakeel_id')->references('id')->on('wakeel')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('representatives', function(Blueprint $table) {
			$table->foreign('wakeel_id')->references('id')->on('wakeel')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('departures', function(Blueprint $table) {
			$table->foreign('wakeel_id')->references('id')->on('wakeel')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('departures', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('directions')
						->onDelete('no action')
						->onUpdate('restrict');
		});
		Schema::table('mazarat', function(Blueprint $table) {
			$table->foreign('wakeel_id')->references('id')->on('wakeel')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mazarat', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('directions')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('between_cities', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('directions')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('arrivals', function(Blueprint $table) {
			$table->dropForeign('arrivals_wakeel_id_foreign');
		});
		Schema::table('arrivals', function(Blueprint $table) {
			$table->dropForeign('arrivals_direction_id_foreign');
		});
		Schema::table('transport_companies', function(Blueprint $table) {
			$table->dropForeign('transport_companies_wakeel_id_foreign');
		});
		Schema::table('representatives', function(Blueprint $table) {
			$table->dropForeign('representatives_wakeel_id_foreign');
		});
		Schema::table('departures', function(Blueprint $table) {
			$table->dropForeign('departures_wakeel_id_foreign');
		});
		Schema::table('departures', function(Blueprint $table) {
			$table->dropForeign('departures_direction_id_foreign');
		});
		Schema::table('mazarat', function(Blueprint $table) {
			$table->dropForeign('mazarat_wakeel_id_foreign');
		});
		Schema::table('mazarat', function(Blueprint $table) {
			$table->dropForeign('mazarat_direction_id_foreign');
		});
		Schema::table('between_cities', function(Blueprint $table) {
			$table->dropForeign('between_cities_direction_id_foreign');
		});
	}
}