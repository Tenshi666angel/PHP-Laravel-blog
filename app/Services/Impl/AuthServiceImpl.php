<?php

namespace App\Services\Impl;

use App\Enums\RoleType;
use App\Exceptions\InvalidCredentialsException;
use App\Models\Role;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\Hash;

class AuthServiceImpl implements AuthService
{
    public function register(string $email, string $name, string $password, RoleType $role): User
    {
        $user = new User([
            'email' => $email,
            'name' => $name,
            'password' => $password
        ]);

        $exRole = Role::where('name', $role->name)->first();
        if(! $exRole) {
            $exRole = new Role(['name' => $role->name]);
            $exRole->save();
        }

        $user->save();

        $user->roles()->attach($exRole->id);

        return $user;
    }

    public function login(string $email, string $password): User
    {
        $user = User::where('email', $email)->first();
        if(! $user)
        {
            throw new InvalidCredentialsException();
        }

        if(! Hash::check($password, $user->password))
        {
            throw new InvalidCredentialsException();
        }

        return $user;
    }
}
