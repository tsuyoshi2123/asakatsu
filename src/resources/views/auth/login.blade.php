@extends('layouts.header')

@section('content')
<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        <div class="card__section">
            <p class="card__section__title">{{ __('Login') }}</p>
        </div>
        <div class="card__contents">
            <div class="card__contents__box">
                <div class="card__contents__box__item">
                    <p class="form-box">
                        <label class="email" for="email">{{ __('Email') }}</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </p>
                </div>
                <div class="card__contents__box__item">
                    <p class="form-box" for="password">
                        <label class="password">{{ __('Password') }}</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </p>
                </div>
            </div>
            <div class="form__check">
                <p class="form__check__wrap">
                    <input name="remember" type="checkbox" class="form__check__wrap--input">
                    <label for="remember" id="remember" class="form__check__wrap--remember">
                        {{ __('Remember Me') }}
                    </label>
                    <a href="{{ route('login') }}" class="btn--login">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
            <div class="forgot__box">
                <div class="forgot__box__item">
                    <a href="" class="btn--forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
