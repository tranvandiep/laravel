<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\Schema;

class AddDescriptionToStudentTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('student', function ($table) {
				$table->string('description', 500);
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}
}
