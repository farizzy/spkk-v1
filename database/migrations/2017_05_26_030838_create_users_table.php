<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nama_lengkap', 25);
			$table->string('name');
			$table->string('password');
			$table->string('email')->unique();
			$table->string('jk', 10);
			$table->string('alamat', 50);
			$table->boolean('is_admin')->default(0);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}