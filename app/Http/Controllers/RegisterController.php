<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'tittle' => 'Register'
        ]);
    }
    public function store(Request $request){
        $validated=$request->validate([
            'name' => 'required|max:255',
            'ic' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:255'
        ]);
        User::create($validated);

        $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
