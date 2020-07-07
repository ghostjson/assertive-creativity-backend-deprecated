<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\StoreUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function test(){
        return auth()->user();
    }

    public function login(LoginRequest $request){
        if(Auth::attempt($request->validated())){
            return $this->getTokenResponse($request->user());
        }else{
            return response()->json(['status'=>'incorrect credentials'], 401);
        }
    }

    public function signup(StoreUser $request){
        $user = User::createUser($request);
        return $this->getTokenResponse($user);
    }

    private function getTokenResponse(User $user){
        $token = $user->createToken('Auth Token')->accessToken;
        return response()->json(['Token' => $token ]);
    }
}
