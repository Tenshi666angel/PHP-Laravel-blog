<?php

namespace App\Exceptions\Handlers;

use App\Exceptions\InvalidCredentialsException;

class AuthHandlers
{
    public static function invalidCredentials()
    {
        return function(InvalidCredentialsException $ex)
        {
            return redirect()->route('showlogin', ['invcred' => true]);
        };
    }
}
