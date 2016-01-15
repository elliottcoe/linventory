<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin()
    {
        $email = Request::input('email');
        $password = Request::input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('dashboard');
        }
    }

}
