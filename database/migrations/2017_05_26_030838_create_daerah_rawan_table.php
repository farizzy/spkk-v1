<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDaerahRawanTable extends Migration {

	public function up()
	{
		Schema::create('daerah_rawan', function(Blueprint $table) {
			$table->increments('id_daerah');
			$table->string('nama', 25);
			$table->string('deskripsi', 100);
		});
	}

	public function down()
	{
		Schema::drop('daerah_rawan');
	}
}