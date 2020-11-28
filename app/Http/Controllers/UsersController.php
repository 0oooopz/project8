<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller {

	public function index() {

		$users = DB::table('users')->get();
		return view('users.index',['users' => $users]);
	}

	public function show(int $id){

		return view('users.show', [
			'user'=>($user = DB::table('users')->find($id))?$user : abort(404)
		]);

	}
}
