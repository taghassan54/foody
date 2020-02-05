<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFoodtruckTable extends Migration {

	public function up()
	{
		Schema::create('foodtruck', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('img')->nullable();
			$table->integer('user_id');
			$table->text('description')->nullable();
			$table->string('city_id');
			$table->string('long')->nullable();
			$table->string('lat')->nullable();
			$table->integer('status')->default('1');
		});
	}

	public function down()
	{
		Schema::drop('foodtruck');
	}
}