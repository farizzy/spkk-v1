<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaranKomentarTable extends Migration {

	public function up()
	{
		Schema::create('saran_komentar', function(Blueprint $table) {
			$table->increments('id_saran');
			$table->integer('id_lap_kehilangan')->unsigned();
			$table->integer('id_pendaftaran')->unsigned();
			$table->string('saran_komentar', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('saran_komentar');
	}
}