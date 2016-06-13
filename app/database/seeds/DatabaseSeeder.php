<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::TABLE('users')->delete();
		DB::TABLE('lessons')->delete();

		$this->call('UserTableSeeder');
		$this->call('LessonTableSeeder');
	}

}
