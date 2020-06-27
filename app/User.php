<?php

namespace App;

use App\Http\Requests\StoreUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isUser(User $user){
        if($user->role == 'user'){
            return true;
        }else{
            return false;
        }
    }

    public static function isVendor(User $user){
        if($user->role == 'vendor'){
            return true;
        }else{
            return false;
        }
    }

    public static function isAdmin(User $user){
        if($user->role == 'admin'){
            return true;
        }else{
            return false;
        }
    }

    public static function createUser(StoreUser $request){
        $data = $request->validated();
        $data['role'] = 'user';
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public static function createVendor(StoreUser $request){
        $data = $request->validated();
        $data['role'] = 'vendor';
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public static function createAdmin(){
        //
    }
}
