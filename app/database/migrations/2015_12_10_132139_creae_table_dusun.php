<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaeTableDusun extends Migration {


	public function up()
	{
		Schema::create('dusun', function($table){
			$table->increments('id');
               $table->string('nama');
               $table->timestamps();
		});
	}

	
	public function down()
	{
		Schema::drop('dusun');
	}

}
