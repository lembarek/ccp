<?php

class UserTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->delete();
		User::create(array(
			'id' => 1,
			'email' => 'a@a.a',
			'username' => 'a',
			'password' => Hash::make('a'),
			'code' => '1',
			'active' => '1',
			'level' => '4',
			));


		User::create(array(
			'id' => 2,
			'email' => 'b@b.b',
			'username' => 'b',
			'password' => Hash::make('b'),
			'code' => '1',
			'active' => '1',
			'level' => '2',
			));

		User::create(array(
			'id' => 3,
			'email' => 'c@c.c',
			'username' => 'c',
			'password' => Hash::make('c'),
			'code' => '1',
			'active' => '1',
			'level' => '2',
			));
	}
}
