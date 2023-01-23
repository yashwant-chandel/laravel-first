<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class testing extends Controller
{ 
    public function testlogin(Request $request){
     $email = $request->email;
     $password = $request->password;
   
     $credentials = $this->getCredentials();

    }
    public function testregister(Request $request){
       
        $user = User::create($request->only('name','email','password'));
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
