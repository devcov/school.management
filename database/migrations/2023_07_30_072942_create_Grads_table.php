<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradsTable extends Migration {

	public function up()
	{
		Schema::create('Grads', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('Name');
			$table->longText('Notes');
		});
	}

	public function down()
	{
		Schema::drop('Grads');
	}
}
