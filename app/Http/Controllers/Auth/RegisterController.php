<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(Request $request)
{
         $validated = $request->validate([
        'name' => ['required', 'max:255'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8', 'regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'],
    ]);

    $user = User::create([
    'name' => $validated['name'],
    'email' => $validated['email'],
    'password' => $validated['password'],
]);

    Auth::login($user);

    return redirect('/');
    }
}