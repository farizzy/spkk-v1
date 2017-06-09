<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('saran_komentar', function(Blueprint $table) {
			$table->foreign('id_lap_kehilangan')->references('id_lap_kehilangan')->on('lap_kehilangan')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('saran_komentar', function(Blueprint $table) {
			$table->foreign('id_pendaftaran')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lap_kehilangan', function(Blueprint $table) {
			$table->foreign('id_daerah')->references('id_daerah')->on('daerah_rawan')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lap_kehilangan', function(Blueprint $table) {
			$table->foreign('id_pendaftaran')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('penemuan', function(Blueprint $table) {
			$table->foreign('id_lap_kehilangan')->references('id_lap_kehilangan')->on('lap_kehilangan')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('saran_komentar', function(Blueprint $table) {
			$table->dropForeign('saran_komentar_id_lap_kehilangan_foreign');
		});
		Schema::table('saran_komentar', function(Blueprint $table) {
			$table->dropForeign('saran_komentar_id_pendaftaran_foreign');
		});
		Schema::table('lap_kehilangan', function(Blueprint $table) {
			$table->dropForeign('lap_kehilangan_id_daerah_foreign');
		});
		Schema::table('lap_kehilangan', function(Blueprint $table) {
			$table->dropForeign('lap_kehilangan_id_pendaftaran_foreign');
		});
		Schema::table('penemuan', function(Blueprint $table) {
			$table->dropForeign('penemuan_id_lap_kehilangan_foreign');
		});
	}
}