<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

       $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
       ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('signin')->with('success', 'Registration successful!');
    }

    public function showSigninForm()
    {
        return view('auth.signin');
    }

    public function signin(Request $request):RedirectResponse
    {
        $credentials =$request->validate([
            'email' => 'required', 'email:dns',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('products.index')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Login failed! Please check your credentials and try again.');


        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email',
        //     'password' => 'required|string|min:8',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // $credentials = $request->only('email', 'password');

        // if(Auth::attempt($credentials, $request->filled('remember'))){
        //     $request->session()->regenerate();
        //     return redirect()->route('products.index')->with('success', 'Login successful!');
        // }

        // return redirect()->back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->withInput();

       
    }
    public function signout(Request $request):RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin')->with('success', 'Sign Out successful!');
    }

    public function dashboard()
    {
        return redirect()->route('products.index');
    }
}