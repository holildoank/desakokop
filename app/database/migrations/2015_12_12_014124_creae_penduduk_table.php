<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaePendudukTable extends Migration {

	public function up()
	{
		Schema::create('penduduk', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nokk');
			$table->string('kepala_keluarga');
			$table->string('nama');
			$table->string('nik');
			$table->string('jenisklamin');
			$table->string('tempatlahir');
			$table->string('tanggallahir');

			$table->unsignedInteger('id_agama');
			$table->foreign('id_agama')->references('id')->on('agama')->onDelete('CASCADE');

			$table->unsignedInteger('id_pendidikan');
			$table->foreign('id_pendidikan')->references('id')->on('pendidikan')->onDelete('CASCADE');

			$table->unsignedInteger('id_pekerjaan');
			$table->foreign('id_pekerjaan')->references('id')->on('pekerjaan')->onDelete('CASCADE');

			$table->unsignedInteger('id_dusun');
			$table->foreign('id_dusun')->references('id')->on('dusun')->onDelete('CASCADE');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('penduduk');
	}


}
