<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class MiddlewareController extends Controller
{
    public function firstRoute(){
        return 'This route is protected by the dummy middleware.';
    }

    public function secondRoute(){
        return 'This route is 2nd protected by the dummy middleware.';
    }

    public function thirdRoute(){
        return 'This route is 3rd protected by the dummy middleware.';
    }


    public function login(){
        return view('login');
    }

    public function logout(){
        return view('logout');
    }

    public function purchase(){
        return view('purchase');
    }

    public function loginUser(Request $request)
    {
        
        $credentials = [
            'email' => $request->input('email')
        ];
        
        $user = User::where('email', $credentials['email'])->first();
        
        if ($user) {
            Auth::login($user);
            return response()->json(['message' => 'Logged in successfully']);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        
    }

    public function logoutUser()
    {
        Auth::logout();
    }
}
