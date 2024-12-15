<?php

namespace App\Services;

use App\Enums\RoleType;
use App\Models\User;

interface AuthService
{
    public function register(string $email, string $name, string $password, RoleType $role): User;

    public function login(string $email, string $password): User;
}
