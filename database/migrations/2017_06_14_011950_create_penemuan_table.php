<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenemuanTable extends Migration {

	public function up()
	{
		Schema::create('penemuan', function(Blueprint $table) {
			$table->increments('id_penemuan');
			$table->timestamps();
			$table->integer('id_lap_kehilangan')->unsigned();
			$table->string('no_polisi_temuan', 8);
			$table->date('tanggal_temuan');
			$table->string('foto', 5);
			$table->string('jenis_temuan', 25);
			$table->string('merk_temuan', 25);
			$table->string('warna_temuan', 25);
			$table->string('no_mesin_temuan', 15);
			$table->string('deskripsi_temuan', 100);
			$table->boolean('status')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('penemuan');
	}
}