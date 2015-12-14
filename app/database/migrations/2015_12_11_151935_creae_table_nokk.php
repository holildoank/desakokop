<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaeTableNokk extends Migration {
	public function up()
	{
		Schema::create('nokk', function($table){
			$table->increments('id');
            $table->string('no_kk');
                            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('nokk');
	}


}
