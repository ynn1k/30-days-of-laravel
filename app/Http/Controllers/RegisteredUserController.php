<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:32'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(6), 'confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
