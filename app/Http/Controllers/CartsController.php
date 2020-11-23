<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartsController extends Controller {
	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index() {
		$usersCarts = DB::select('
          SELECT users.name as u_name, first_name, last_name, products.name as p_name FROM carts        
          JOIN users ON carts.user_id = users.id
        	JOIN products ON products.id = carts.product_id
            ');
//
		return response()->json(['carts' => $usersCarts]);
	}

	/**
	 * @param $id
	 */
	public function show($id) {

		$userCart = DB::select('
            SELECT users.name as u_name, first_name, last_name, products.name as p_name FROM carts 
            JOIN users ON carts.user_id = users.id
            JOIN products ON products.id = carts.product_id
            WHERE user_id = ' . $id . '
            ');

		return response()->json(['carts' => $userCart]);
	}
}
