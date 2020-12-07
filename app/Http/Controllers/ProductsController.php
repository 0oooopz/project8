<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;


class ProductsController extends Controller {

    public function index(){
    	$sdsdsdd =Product::all();
    	return view('products.index',['products'=>$sdsdsdd]);
    }

    public function show(int $id){
			$wwww = 4;
    	return view('products.show',['products'=>Product::findOrFail($id)]);
    }

    public function create(){
    	return view('products.create');
    }

    public function edit($id){
    	return view('products.edit', ['products'=>Product::findOrFail($id)]);
    }

	/**
	 * @param Request $request
	 * @return string
	 */
    public function store(Request $request){

    	$product = new Product();
//
//    	$product->create([
//	    'name' => $request->name,
//	    'sku' => $request->sku,
//	    'slug' => $request->slug,
//	    'price_user' => $request->price_user,
//	    'price_3_opt' => $request->price_3_opt,
//	    'price_8_opt' => $request->price_8_opt,
//	    'price_dealer' => $request->price_dealer,
//	    'price_vip' => $request->price_vip,
//	    'category_id' => $request->category_id,
//	    'stock' => $request->stock,
//]);

    	$product->name = $request->name;
    	$product->sku = $request->sku;
    	//$product->slug = $request->slug;
    	$product->price_user = $request->price_user;
    	$product->price_3_opt = $request->price_3_opt;
    	$product->price_8_opt = $request->price_8_opt;
    	$product->price_dealer = $request->price_dealer;
    	$product->price_vip = $request->price_vip;
    	$product->category_id = $request->category_id;
    	$product->stock = $request->stock;

    	$product->save();
	    return redirect()->route('products.index');
    }

    public function update($id, Request $request){
    	$product = new Product();
	    Product::findOrFail($id)->delete();

	    $product->name = $request->name;
	    $product->sku = $request->sku;
	    //$product->slug = $request->slug;
	    $product->price_user = $request->price_user;
	    $product->price_3_opt = $request->price_3_opt;
	    $product->price_8_opt = $request->price_8_opt;
	    $product->price_dealer = $request->price_dealer;
	    $product->price_vip = $request->price_vip;
	    $product->category_id = $request->category_id;
	    $product->stock = $request->stock;

	    $product->save();
	    return redirect()->route('products.index');
    }

    public function destroy($id){
			Product::findOrFail($id)->delete();
			return redirect()->route('products.index');
    }
}
