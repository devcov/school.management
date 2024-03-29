<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradsTable extends Migration {

	public function up()
	{
		Schema::create('Grads', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('Name');
			$table->longText('Notes')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Grads');
	}
}
