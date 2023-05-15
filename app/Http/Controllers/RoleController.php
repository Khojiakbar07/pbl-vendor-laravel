<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = role::query()->orderByDesc('id')->paginate(20);
        return view('shop.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('shop.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreroleRequest $request)
    {
        $role = new role();
        $role->name = $request->name;
        $role->permissions = $request->permissions;
        $role->save();

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        return view('shop.role.show', compact('role'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(role $role)
    {
        //
        return view('shop.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, role $role)
    {
        //$role->update($request->except(['_method', '_token']));
        $role->name = $request->name;
        $role->permissions = $request->permissions;
        $role->status = $request->status;
        $role->save();
        return redirect()->route('role.index')->with('status', 'role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        $role->deleteOrFail();
        return redirect()->route('role.index')->with('status', 'role deleted successfully');
    }
}
