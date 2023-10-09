<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function signup(Request $request){
        $user_validated_input = $request->validate([
            'name' => 'required | min:3',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:6'
        ],
        [
            'name.required' => 'Please enter a username.',
            'name.min' => 'Username must be at least 3 characters long.',
            'name.unique' => 'Username is already taken.',
            'email.required' => 'Please enter an email address.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email address is already registered.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Password must be at least 6 characters long.',
        ]);
        // return dd($user_validated_input);
        User::create($user_validated_input);
        return redirect('/login')->with('msg' , "User created successfully.");
    }

    public function login(Request $request){

        $user_credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if(Auth::attempt($user_credentials)){
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with(['msg' => 'Invalid credentials']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
