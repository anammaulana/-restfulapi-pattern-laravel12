<?php
namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService
{
    public function register($data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function login($credentials)
    {
        if (!$token = JWTAuth::attempt($credentials)) {
            return false;
        }

        return $token;
    }
}