<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Bob Harris',
			'username' => 'bharris',
			'email'    => 'bharris@mrmail.com',
			'password' => Hash::make('cheese'),
		));
	}

}