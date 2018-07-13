<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('category')->insert([
				'title'       => 'test',
				'description' => "vi du",
				'created_at'  => '2018-07-13',
				'updated_at'  => '2018-07-13'
			]);
	}
}
