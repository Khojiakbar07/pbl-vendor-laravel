<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function all(){
        try {
            $products = Product::where('deleted', '0')->where('status', '1')->get();
        }catch (\Exception $exception){
            return response()->forbidden($exception->getMessage());
        }

        return response()->ok($products);
    }

    public function brand(){
        try {
            $products = Brand::where('deleted', '0')->where('status', '1')->get();
        }catch (\Exception $exception){
            return response()->forbidden($exception->getMessage());
        }

        return response()->ok($products);
    }

    public function storeCartToOrder(Request $request){
        sendTelegram('me', json_encode($request->all())); //977350811
        app('App\Http\Controllers\OrderController')->store($request);
    }
}
