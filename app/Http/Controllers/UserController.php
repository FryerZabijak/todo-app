<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login(){
        return view("pages.user.login");
    }

    public function authenticate(){
        $formFields = request()->validate([
            "email" => ["required","email"],
            "password" => "required",
        ]);

        if(auth()->attempt($formFields)){
            request()->session()->regenerate();
            return redirect("/")->with("message", "You are now logged in");
        }

        return back()->with("message","Invalid Credentials")->onlyInput("email");
    }

    public function create(){
        return view("pages.user.register");
    }

    public function store(){
        $formFields = request()->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ["required", "confirmed", "min:6"]
        ]);

        $formFields["password"] = bcrypt($formFields["password"]);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect("/")->with("message", "User created");
    }

    public function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect("/")->with("message", "You have been logged out");
    }
}
