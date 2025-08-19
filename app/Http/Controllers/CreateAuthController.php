<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CreateAuthController extends Controller
{
    public function create()
    {
        return view('create_auth.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($user) {
            auth()->login($user);
            return redirect()->route('jobs.index')->with('success', 'Account created successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Failed to create account.');
        }
    }

}
