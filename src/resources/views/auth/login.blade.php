@extends('layouts.header')

@section('content')
<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card__section">
            <p class="card__section__title">{{ __('Login') }}</p>
        </div>
        <div class="card__contents">
            <div class="card__contents__box">
                <div class="card__contents__box__item">
                    <div>
                        <p class="form-box">
                            <label class="email" for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </p>
                        @error('email')
                        <span class="help-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="card__contents__box__item">
                    <div>
                        <p class="form-box" for="password">
                            <label class="password">{{ __('Password') }}</label>
                            <input type="text" name="password" id="password" class="form-control" value="{{ old('password') }}">
                        </p>
                        @error('password')
                        <span class="help-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__check">
                <p class="form__check__wrap">
                    <input name="remember" type="checkbox" class="form__check__wrap--input" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" id="remember" class="form__check__wrap--remember">
                        {{ __('Remember Me') }}
                    </label>
                    <button type="submit" class="btn--login">
                        {{ __('Login') }}
                    </button>
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
