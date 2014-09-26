<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Nicholas Mejia',
			'username' => 'nnmejia',
			'email'    => 'nicknmejia@gmail.com',
			'password' => Hash::make('chicken'),
		));
	}

}