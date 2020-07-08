<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Http\Resources\UserResource;
use App\User;
use Exception;

class UserController extends Controller
{

    function index(){
        $users = User::where('role','user')->get();
        return UserResource::collection($users);
    }

    function show(User $user){
        if(User::isUser($user)){
            return new UserResource($user);
        }else{
            return response()->json(['status'=> 'not found'], 404);
        }
    }

    function update(User $user, UpdateUser $request){
        $user = User::isUser($user) ? $user : abort(404);
        $user->update($request->validated());
        return $user;
    }

    function store(StoreUser $request){
        return User::createUser($request);
    }

    function destroy(User $user){
        $user = User::isUser($user) ? $user : abort(404);
        try{
            $user->delete();
        }catch (Exception $e){
            return response()->json(['status'=>'could not Delete'], 400);
        }git
    }

}
