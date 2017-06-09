<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLapKehilanganTable extends Migration {

	public function up()
	{
		Schema::create('lap_kehilangan', function(Blueprint $table) {
			$table->increments('id_lap_kehilangan');
			$table->timestamps();
			$table->string('no_surat_hilang', 30);
			$table->integer('id_daerah')->unsigned();
			$table->integer('id_pendaftaran')->unsigned();
			$table->string('no_polisi', 10);
			$table->string('jenis_kendaraan', 25);
			$table->string('merk_kendaraan', 25);
			$table->string('warna_kendaraan', 25);
			$table->string('no_mesin', 15);
			$table->date('tanggal_hilang');
			$table->string('keterangan', 100);
		});
	}

	public function down()
	{
		Schema::drop('lap_kehilangan');
	}
}