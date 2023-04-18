<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $validated = $request->safe()->only(['email', 'password']);

        if(Auth::attempt($validated)) {
            return redirect()->intended('admin/home')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withErrors('Oppes! You have entered invalid credentials');
    }
}
