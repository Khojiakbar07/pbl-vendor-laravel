<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function terminal(){
        return view('layouts.vue_terminal');
    }

    /* public function terminal2(){
        return view('layouts.vue_terminal');
        //return view('shop.terminal');
    } */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::query()->orderByDesc('id')->paginate(20);
        return view('shop.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($cart) // StoreOrderRequest
    {

        $request = new Request();
        $request['price'] = $cart->totalPrice;
        $items = $cart->card;

        //$items = $request->toArray();

        $order = new Order();
        $order->user_id = auth()->id() ?? null;
        $order->customer_id = $request->customer_id ?? null;
        $order->coupon_code = $request->coupon_code ?? null;
        $order->price = $request->price ?? '0';
        $order->price_vat = $request->price_vat ?? '0';
        $order->price_delivery = $request->price_delivery ?? '0';
        $order->price_discount = $request->price_discount ?? '0';
        $order->total_price = $request->total_price ?? '0';

        if($order->save()){
            foreach($items as $item){
                $order_item = new OrderItem();
                $order_item->order_id = $order->id;
                $order_item->product_id = $item->id;
                $order_item->quantity = $item->quantity ?? '1';
                $order_item->price = Product::findOrFail($item->id)->price ?? '0';
                $order_item->save();
            }
        }

        sendTelegram('group', json_encode($order));

        return true;

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
