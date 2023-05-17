<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::query()->orderByDesc('id')->paginate(20);
        return view('shop.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request) //StoreCustomerRequest
    {
        //dd($request->all());
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if ($request->has('image')) {
            $image = $request->file('image')->storeAs(
                'public/customer/images', Str::random('32') . '.' . $request->file('image')->extension()
            );
            $customer->image = str_replace('public/', 'storage/', $image);
            //$customer->images = $request->file('images')->store('public/products/images');
            //$customer->images = Storage::disk('public')->putFile('products', $request->file('images'));
        }
        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('shop.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
        return view('shop.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, customer $customer)
    {
        //$customer->update($request->except(['_method', '_token']));
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->birthday=$request->birthday;
        $customer->phone =$request->phone;
        $customer->address =$request->address;
        if ($request->has('image')) {
            $image = $request->file('image')->storeAs(
                'public/customer/images', Str::random('32') . '.' . $request->file('image')->extension()
            );
            $customer->image = str_replace('public/', 'storage/', $image);
        }
        $customer->save();
        return redirect()->route('customer.index')->with('status', 'customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->deleteOrFail();
        return redirect()->route('customer.index')->with('status', 'customer deleted successfully');
    }
}
