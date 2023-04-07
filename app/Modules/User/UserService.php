<?php

declare(strict_types=1);

namespace App\Modules\User;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class UserService {

    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(array $validated, string $throttleKey = null)
    {
        $credentials = [
            "email" => $validated['email'],
            "password" => $validated['password']
        ];

        $rememberMe = boolval($validated['remember'] ?? 0);
        $success = Auth::attempt($credentials, $rememberMe);

        if ($success) {
            session()->regenerate();
            $throttleKey && RateLimiter::clear($throttleKey);
        } else {
            $throttleKey && RateLimiter::hit($throttleKey);
        }

        return $success;
    }

    public function register(array $data): bool
    {
        $data['password'] = Hash::make($data['password']);
        $createdUser = $this->userRepository->insertUser($data);
        event(new Registered($createdUser));
        return $createdUser != null;
    }
}

