@extends('layouts.app')
<title>REGISTER - SMKN 6 JEMBER</title>
@section('content')
    <div class="container-fluid">
        <div class="login d-grid">
            <div class="login__content d-grid">
                <div class="login__img d-flex justify-content-center">
                    <img src="{{ asset('assets/logres/img/img-login.svg') }}" alt="">
                </div>

                <div class="login__forms position-relative">
                    <form method="POST" action="{{ route('register') }}" class="login__create position-absolute text-center"
                        id="login-up">
                        @csrf
                        <h1 class="login__title">Create Account</h1>

                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input id="name" type="text" placeholder="Username" class="login__input"
                                @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                                autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input id="email" type="email" placeholder="Email" class="login__input"
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input id="password" type="password" placeholder="Password" class="login__input"
                                @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="login__input"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="login__button d-block text-center">
                            {{ __('Register') }}
                        </button>

                        <div>
                            <span class="login__account">Already have an Account ?</span>
                            <span class="login__signin" id="sign-up"><a class="nav-link"
                                    href="{{ route('login') }}">{{ __('Login') }}</a></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
