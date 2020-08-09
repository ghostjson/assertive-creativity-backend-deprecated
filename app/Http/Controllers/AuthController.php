<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\StoreUser;
use App\Http\Resources\UserResource;
use App\User;
use Egulias\EmailValidator\Exception\ExpectingCTEXT;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Authentication
 * Authentication of user <br>
 * JWT authentication is used
*/
class AuthController extends Controller
{

    /**
     * Login
     * user login
     * @bodyParam email string required email of the user
     * @bodyParam password string required password of the user
     * @response {
        "token": "user_token"
     * }
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request) : JsonResponse {
        if(Auth::attempt($request->validated())){
            return $this->getTokenResponse($request->user());
        }else{
            return response()->json(['status'=>'incorrect credentials'], 401);
        }
    }

    /**
     * Registration
     * user registration
     * @bodyParam email string required email of the user
     * @bodyParam password string required password of the user ( min : 8 )
     * @bodyParam name string required name of the user
     * @bodyParam phone string phone number of the user
     * @response {
            "token": "user_token"
     * }
     * @param StoreUser $request
     * @return JsonResponse
     */
    public function signup(StoreUser $request) : JsonResponse {
        try{
            $user = User::createUser($request);
        }catch (\Exception $e){
            return response()->json(['status' => $e], 409);
        }
        return $this->getTokenResponse($user);
    }


    public function getRole(){
        return response()->json(['role' => \auth()->user()->role]);
    }

    /**
     * Get current user
     * @authenticated
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\User
     */
    public function getUser(): UserResource {
        return new UserResource(auth()->user());
    }

    private function getTokenResponse(User $user){
        $token = $user->createToken('Auth Token')->accessToken;
        return response()->json(['Token' => $token ]);
    }
}
