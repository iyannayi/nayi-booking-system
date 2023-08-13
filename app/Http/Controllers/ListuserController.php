<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;

class ListuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::latest();
        // if(request('search')){
        //     $users->where('name', 'like', '%'.request('search').'%')
        //         ->orWhere('ic', 'like', '%'.request('search').'%')
        //         ->orWhere('email', 'like', '%'.request('search').'%');
        // }

        return view('list-user.main',[
            'tittle' => 'List User',
            'users'=> $users->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('list-user.create', [
            'tittle' => 'Create User',
            'roles'=> Roles::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name' => 'required|max:255',
            'ic' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'nullable|max:255',
            'staffid' => 'nullable|max:255',
            'status' => 'nullable|max:255',
            'department' => 'nullable|max:255',
            'section' => 'nullable|max:255',
            'role_id' => 'required',
            'password' => 'required|min:4|max:255'
        ]);
        User::create($validated);

        return redirect('/list-user')->with('success', 'User has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('list-user.edit', [
            'tittle' => 'Edit User'
        ])->with([
            'users'=> User::find($id),
            'roles'=> Roles::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated=$request->validate([
            'name' => 'required|max:255',
            'ic' => 'required|max:255',
            'email' => 'required|email:dns',
            'phone' => 'nullable|max:255',
            'staffid' => 'nullable|max:255',
            'status' => 'nullable|max:255',
            'department' => 'nullable|max:255',
            'section' => 'nullable|max:255',
            'role_id' => 'required',
            //'password' => 'required|min:4|max:255'
        ]);

        User::where('id', $id)->update($validated);

        return redirect('/list-user')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/list-user')->with('success', 'User has been deleted!');
    }
}
