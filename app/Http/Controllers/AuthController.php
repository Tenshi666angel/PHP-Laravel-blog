<?php

namespace App\Http\Controllers;

use App\Enums\RoleType;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {}

    public function showRegisterForm(Request $request)
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->authService->register(
            $request->input('email'),
            $request->input('name'),
            $request->input('password'),
            RoleType::USER
        );

        Auth::login($user);

        return redirect('/home');
    }

    public function showLoginForm(Request $request)
    {
        $msg = session('invcred');

        return view('/login', ['msg' => $msg]);
    }

    public function login(LoginRequest $request)
    {
        $user = $this->authService->login(
            $request->input('email'),
            $request->input('password')
        );

        Auth::login($user);

        return redirect('/home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/register');
    }
}
