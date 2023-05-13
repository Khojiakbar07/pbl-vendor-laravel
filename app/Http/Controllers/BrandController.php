<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::query()->orderByDesc('id')->with(['user'])->paginate(20);
        return view('shop.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('shop.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand->user_id = auth()->id();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        if($request->has('image')){
            $image = $request->file('image')->storeAs(
                'public/brand/images', Str::random('32').'.'.$request->file('image')->extension()
            );
            $brand->image = str_replace('public/', 'storage/', $image);
            //$brand->images = $request->file('images')->store('public/products/images');
            //$brand->images = Storage::disk('public')->putFile('products', $request->file('images'));
        }
        $brand->save();

        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('shop.brand.show', compact('brand'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
        return view('shop.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //$brand->update($request->except(['_method', '_token']));
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->slug);

        if ($request->has('image')){
            $image = $request->file('image')->storeAs(
                'public/brand/images', Str::random('32').'.'.$request->file('image')->extension()
            );
            $brand->image = str_replace('public/', 'storage/', $image);
        }

        $brand->save();
        return redirect()->route('brand.index')->with('status', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->deleteOrFail();
        return redirect()->route('brand.index')->with('status', 'brand deleted successfully');
    }
}
