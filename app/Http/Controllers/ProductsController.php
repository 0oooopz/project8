<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;


class ProductsController extends Controller {
	/**
	 * @return View Вопрос Че тут возвращать ?
	 */
    public function index(): View
    {
    	return view('products.index',['products'=>Product::all()]);
    }

	/**
	 * @param int $id
	 * @return \Illuminate\Contracts\View\View
	 */
    public function show(int $id): \Illuminate\Contracts\View\View
    {
    	return view('products.show',['products'=>Product::findOrFail($id)]);
    }

	/**
	 * @return \Illuminate\Contracts\View\View
	 */
    public function create(): \Illuminate\Contracts\View\View
    {
    	return view('products.create');
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\View
	 */
    public function edit($id): \Illuminate\Contracts\View\View
    {
    	return view('products.edit', ['products'=>Product::findOrFail($id)]);
    }

	/**
	 * @param Request $request
	 * @return string
	 */
    public function store(Request $request): RedirectResponse
    {

    	$product = new Product();

    	$product->create(array_merge($request->all(),['slug' => Str::slug($request->name)]));
	    return redirect()->route('products.index');
    }

	/**
	 * @param $id
	 * @param Request $request
	 * @return RedirectResponse
	 */
    public function update($id, Request $request): RedirectResponse
    {
    	$product = Product::findOrFail($id);

	    $product->update(array_merge($request->all(),['slug' => Str::slug($request->name)]));
	    return redirect()->route('products.index');
    }

	/**
	 * @param $id
	 * @return RedirectResponse
	 */
    public function destroy($id): RedirectResponse
    {
			Product::findOrFail($id)->delete();
			return redirect()->route('products.index');
    }
}
