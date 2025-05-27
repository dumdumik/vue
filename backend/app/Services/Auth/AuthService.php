<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function register(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'role' => 'client',
        ]);
    }

    public function login(array $credentials): string
    {
        if (!Auth::attempt($credentials)) {
            abort(401, 'Invalid credentials');
        }

        return Auth::user()->createToken('auth_token')->plainTextToken;
    }
}
