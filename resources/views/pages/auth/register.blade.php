@extends('layouts.auth')

@section('title', 'Register')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/app/sign-up.css') }}">
@endsection

@section('content')
    <main class="form-signin w-100 m-auto">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <img class="mb-4" src="{{ asset('images/app/logo.svg') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="usernameInput"
                    placeholder="user1234" name="username" value="{{ old('username') }}">
                <label for="usernameInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailInput"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="emailInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="passwordInput"
                    placeholder="Password" name="password">
                <label for="passwordInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="passwordConfInput" placeholder="password" name="password_confirmation">
                <label for="passwordConfInput">Password Confirmation</label>
            </div>
            @error('username')
                <div class="text-danger m-3">
                    <small>
                        {{ $message }}
                    </small>
                </div>
            @enderror
            @error('email')
                <div class="text-danger m-3">
                    <small>
                        {{ $message }}
                    </small>
                </div>
            @enderror
            @error('password')
                <div class="text-danger m-3">
                    <small>
                        {{ $message }}
                    </small>
                </div>
            @enderror
            @error('password_confirmation')
                <div class="text-danger m-3">
                    <small>
                        {{ $message }}
                    </small>
                </div>
            @enderror
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign Up</button>
            <p class="register-link">Allready have account ? <a href="{{ route('login.page') }}">Sign in here</a>
            </p>
            <p class="mt-5 mb-3 text-muted">&copy; ShortStoryApp, 2023</p>
        </form>
    </main>
@endsection
