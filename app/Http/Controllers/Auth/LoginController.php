<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
            redirect()->route('posts.index')->with("You logged in as {$request->name}");
        }
        return back()->withErrors(['password' => 'The password is incorrect.'])->onlyInput('email');
    }
}
