@extends('layouts.app')
<title>LOGIN - SMKN 6 JEMBER</title>
@section('content')
    <div class="container-fluid">
        <div class="login d-grid">
            <div class="login__content d-grid">
                <div class="login__img d-flex justify-content-center">
                    <img src="{{ asset('assets/logres/img/img-login.svg') }}" alt="">
                </div>

                <div class="login__forms position-relative">
                    <form method="POST" action="{{ route('login') }}" class="login__registre position-absolute text-center "
                        id="login-in">
                        @csrf
                        <h1 class="login__title">Log In</h1>

                        <div class="login__box d-grid gap-2">
                            <i class='bx bx-user login__icon'></i>
                            <input id="email" type="email" type="text" placeholder="Email" class="login__input"
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="login__box d-grid gap-2">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input id="password" type="password" type="password" placeholder="Password"
                                class="login__input" @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- @if (Route::has('password.request'))
                            <a class="login__forgot d-block" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}

                        <button type="submit" class="login__button d-block text-center">
                            {{ __('Login') }}
                        </button>
                        <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <span class="login__signin" id="sign-up"><a class="nav-link"
                                    href="{{ route('register') }}">{{ __('Register') }}</a></span>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
