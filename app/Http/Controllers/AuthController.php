<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function test(){
        $user = User::find(2);

        return $user->createToken('Token Name')->accessToken;

    }
}
