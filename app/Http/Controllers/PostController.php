<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PostController extends Controller {
	public function viewPost(Request $request, $post_name) {
		// echo $request->url();
		//tuong tac vs database.
		// return view('view_post', ['post_name' => $post_name]);
		return view('view_post')->with(['post_name' => $post_name]);
	}

	public function postForm(Request $request) {
		$title       = $request->title;
		$description = $request->description;

		$today = date("Y-m-d H:i:s");

		DB::table('post')->insert([
				'title'       => $title,
				'description' => $description,
				'alias'       => str_replace(" ", "-", $title).".html",
				'created_at'  => $today,
				'updated_at'  => $today
			]);

		return redirect('showPost');
	}

	public function showPost(Request $request) {
		$data = DB::table('post')->get();
		return view('show_post')->with(['data' => $data]);
	}
}
