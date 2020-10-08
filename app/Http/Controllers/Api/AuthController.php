<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register (Request $request ){
        $validatedData = $request->validate([
    
                'name'=>'required|max:55',
                'email'=>'email|required',
                'password'=>'required|comfirmed'
    
            ]);
             $user= User::create($validatedData);
             $accessToken = $user ->createToken('authToken')->access_token;
    
             return response(['user'=>$user,'access_token'=>$accessToken]);
        }
    
    public function login (){
    
    
    
    
    }
}
