<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param Category $category
	 * @return View
	 */

    public function index(Category $category): View
    {
        return view('categories.index',['categories' => $category->all()]);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return View
	 */

    public function create(): View
    {
        return view('categories.create');
    }

	/**
	 * @param Request $request
	 * @param Category $category
	 * @return RedirectResponse
	 */
    public function store(Request $request, Category $category): RedirectResponse
    {
        $category->create(array_merge($request->all(),['slug' => Str::slug($request->name)]));
        return redirect()->route('categories.index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param Category $category
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */

    public function show(Category $category)
    {
    	//dd($category);
        return view('categories.show', ['category' => $category]);
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Category $category
	 * @return View
	 */

    public function edit(Category $category): View
    {
        return view('categories.edit', ['category' => $category]);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param Category $category
	 * @return RedirectResponse
	 */

    public function update(Request $request, Category $category): RedirectResponse
    {
        $category->update(array_merge($request->all(),['slug' => Str::slug($request->name)]));
        return redirect()->route('categories.index');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Category $category
	 * @return RedirectResponse
	 * @throws \Exception
	 */

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
