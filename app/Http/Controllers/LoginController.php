<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Modules\User\UserService;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->checkIfRateLimited();
        $success = $this->userService->login($request->validated(), $request->throttleKey());

        if ($success) {
            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return redirect()
                    ->back()
                    ->withErrors(['email' => trans('auth.failed')])
                    ->onlyInput('email');
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(RouteServiceProvider::HOME);
    }
}
