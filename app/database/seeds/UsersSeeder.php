<?php

class UsersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('users')->delete();

        User::create(array(
            'username' => 'admin',
            'password' => Hash::make('adminpassword'),
        ));

        User::create(array(
            'username' => 'user ',
            'password' => Hash::make('userpassword'),
        ));

	}

}
