<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->orderByDesc('id')->paginate(20);
        return view('shop.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('shop.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = new user();
        $user->name = $request->name;
        $user-> email = $request->email;
        $user->password = $request->password;
        $user->user_type = $request->user_type;

        if($request->has('image')){
            $image = $request->file('image')->storeAs(
                'public/user/images', Str::random('32').'.'.$request->file('image')->extension()
            );
            $user->avatar = str_replace('public/', 'storage/', $image);
        }
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('shop.user.show', compact('user'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('shop.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //$user->update($request->except(['_method', '_token']));
        $user->name = $request->name;
        $user-> email = $request->email;
        $user->password = $request->password;
        $user->user_type = $request->user_type;

        if($request->has('image')){
            $image = $request->file('image')->storeAs(
                'public/user/images', Str::random('32').'.'.$request->file('image')->extension()
            );
            $user->avatar = str_replace('public/', 'storage/', $image);
        }
        $user->save();

        return redirect()->route('user.index')->with('status', 'user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->deleteOrFail();
        return redirect()->route('user.index')->with('status', 'user deleted successfully');
    }
}
