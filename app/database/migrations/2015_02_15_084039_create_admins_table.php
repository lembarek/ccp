<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins',function($t){
					$t->increments('id');
					$t->text('name');
					$t->text('password');
					$t->integer('active');
					$t->timestamps();
					$t->string('remember_token');
				});

	}

	public function down()
	{
		Schema::drop('admins');
	}

}
