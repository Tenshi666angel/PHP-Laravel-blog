<?php

namespace App\Exceptions\Handlers;

use App\Exceptions\InvalidCredentialsException;
use Illuminate\Http\Request;

class AuthHandlers
{
    public static function invalidCredentials()
    {
        return function(InvalidCredentialsException $ex, Request $request)
        {
            session()->flash('invcred', 'invalid credentials');
            return redirect()->route('showlogin');
        };
    }
}
