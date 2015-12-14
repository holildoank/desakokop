<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePendidikan extends Migration {
public function up()
	{
		Schema::create('pendidikan', function($table){
			$table->increments('id');
               $table->string('jenjangpendidikan');
             
               $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pendidikan');
	}

}
