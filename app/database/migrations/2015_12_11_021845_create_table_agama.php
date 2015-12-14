<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgama extends Migration {

	public function up()
	{
		Schema::create('agama', function($table){
			$table->increments('id');
               $table->string('nama');
             
               $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('agama');
	}

}
