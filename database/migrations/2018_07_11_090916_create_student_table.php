<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('student', function (Blueprint $table) {
				$table->increments('id');
				$table->string('fullname', 150);
				$table->integer("age");
				$table->string('gender', 5);
				$table->string('address', 250);
				$table->string('email', 100);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('student');
	}
}
