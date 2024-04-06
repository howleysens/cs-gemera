<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'nickname' => ['required', 'min:2', 'unique:users,nickname'],
            'password' => ['required', Password::min(6), 'confirmed', 'min:6', 'max:70'],
        ]);

        $user = User::query()->create([
            'email' => $request->email,
            'nickname' => $request->nickname,
            'password' => $request->password,
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
}
