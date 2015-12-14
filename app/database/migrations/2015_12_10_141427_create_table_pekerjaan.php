<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePekerjaan extends Migration {
	public function up()
	{
		Schema::create('pekerjaan', function($table){
			$table->increments('id');
               $table->string('nama');
               $table->string('Jenispekerjaan');
               $table->timestamps();
		});
	}

	
	public function down()
	{
		Schema::drop('pekerjaan');
	}

}
