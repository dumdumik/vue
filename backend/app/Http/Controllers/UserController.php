<?php

namespace App\Http\Controllers;

use App\Actions\User\LoginAction;
use App\Actions\User\LogoutAction;
use App\Actions\User\RegisterAction;

class UserController extends Controller
{
    public function register(Request $request){
        dd($request);
        return RegisterAction::execute($request);
    }

    public function login(Request $request){
        return LoginAction::execute($request);
    }

    public function logout(Request $request){
        return LogoutAction::execute($request);
    }
}
