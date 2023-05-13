<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$query = DB::query('SELECT * FROM products')->;
        //$query = DB::select('select * from users');
        //$query = Product::query()->where('user_id', '1')->first();
        //dump($query->name);
        //dd($query);
        $products = Product::query()->orderByDesc('id')->with(['user'])->paginate(20);
        return view('shop.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::query()->where('deleted', '0')->get();
        $suppliers = Supplier::query()->where('deleted', '0')->get();
        $categories = Category::query()->where('deleted', '0')->get();

        return view('shop.product.create', compact('brands', 'suppliers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->user_id = auth()->id();
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->price = $request->price;

        if($request->has('images')){
            $image = $request->file('images')->storeAs(
                'public/products/images', Str::random('32').'.'.$request->file('images')->extension()
            );

            $product->image = str_replace('public/', 'storage/', $image);

            //$product->images = $request->file('images')->store('public/products/images');

            //$product->images = Storage::disk('public')->putFile('products', $request->file('images'));


        }
        $product->save();


        return redirect()->route('product.index');
        //return redirect()->route('product.show', $product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('shop.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('shop.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->except(['_method', '_token']));
        return redirect()->route('product.index')->with('status', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @throws Throwable
     */
    public function destroy(Product $product)
    {
        $product->deleteOrFail();
        return redirect()->route('product.index')->with('status', 'Product deleted successfully');
    }
}

