<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	public function postCategory(Request $request) {
		DB::table('category')->insert([
				'title'       => $request->title,
				'description' => $request->description,
				'created_at'  => '2018-07-13',
				'updated_at'  => '2018-07-13'
			]);
		// $data = DB::table('category')->get();
		// var_dump($data);
		return view('test', ['request' => $request]);
	}

	public function test($value) {
		return 'test :'.$value;
	}
}
