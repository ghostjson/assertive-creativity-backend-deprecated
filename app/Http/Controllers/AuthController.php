<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function test(){
        $user = User::find(2);

        return $user->createToken('Token Name')->accessToken;
    }

    public function login(LoginRequest $request){
        if(Auth::attempt($request->validated())){
            $user = User::where('email', '=', $request->input('email'))->first();
            return $user->createToken('Auth Token')->accessToken;
        }else{
            return response()->json(['status'=>'incorrect credentials'], 401);
        }
    }
}
