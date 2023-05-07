<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->paginate();
        return view('shop.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)

    {
        $category = new Category();
        if($request->has('image')){
            $image = $request->file('image')->storeAs(
                'public/category/images', Str::random('32').'.'.$request->file('image')->extension()
            );

            $category->image = str_replace('public/', 'storage/', $image);

            //$category->image = $request->file('image')->store('public/products/images');

            //$category->image = Storage::disk('public')->putFile('products', $request->file('image'));


        }
        if($request->has('icon')){
            $icon = $request->file('icon')->storeAs(
                'public/category/icons', Str::random('32').'.'.$request->file('icon')->extension()
            );

            $category->icon = str_replace('public/', 'storage/', $icon);

            //$category->image = $request->file('image')->store('public/products/images');

            //$category->image = Storage::disk('public')->putFile('products', $request->file('image'));


        }
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('shop.category.show', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('shop.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->except(['_method', '_token']));
        return redirect()->route('category.index')->with('status', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->deleteOrFail();
        return redirect()->route('category.index')->with('status', 'category deleted successfully');
    }
}
