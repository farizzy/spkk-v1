<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeritasTable extends Migration {

	public function up()
	{
		Schema::create('beritas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('judul', 50);
			$table->timestamps();
			$table->text('isi');
		});
	}

	public function down()
	{
		Schema::drop('beritas');
	}
}