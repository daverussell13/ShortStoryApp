<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Modules\User\UserService;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('pages.auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();
        $success = $this->userService->register($validated);

        if ($success) {
            $this->userService->login($validated);
            return redirect(RouteServiceProvider::HOME)->with('success', 'Successfully register account!');
        } else {
            return redirect('register.page')->with('error', 'Oops, something went wrong!');
        }
    }
}
