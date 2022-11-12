@extends('layouts.header')

@section('content')
<div class="regist-container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card__section">
            <p class="card__section__title">{{ __('Register') }}</p>
        </div>
        <div class="card__contents">
            <div class="card__contents__box">
                <div class="card__contents__box__item">
                    <div class="registration">
                        <p class="form-box">
                            <label class="name" for="name">{{ __('name') }}</label>
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </p>
                        @error('name')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="card__contents__box__item">
                    <div class="registration">
                        <p class="form-box">
                            <label class="email" for="email">{{ __('Email') }}</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </p>
                        @error('email')
                            <span class="help-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="card__contents__box__item">
                    <div class="registration">
                        <p class="form-box" for="password">
                            <label class="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </p>
                        @error('password')
                            <span class="help-block invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="card__contents__box__item">
                    <p class="form-box" for="confirm-password">
                        <label class="confirm-password">{{ __('Confirm Password') }}</label>
                        <input id="confirm-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </p>
                </div>
            </div>
            <div class="form__check">
                <div class="form__check__wrap">
                    <input name="remember" type="checkbox" class="form__check__wrap--input" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" id="remember" class="form__check__wrap--remember">
                        {{ __('Remember Me') }}
                    </label>
                    <div class="forgot__box">
                        <div class="forgot__box__item">
                            <a class="btn--forgot" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other__contents">
                <div class="other__contents__wrap">
                    <label class="other__contents__wrap--title">
                        SelectProfile<br>Picure
                    </label>
                    <input name="file_upload" type="file" class="file_upload">
                    <button type="submit" class="btn--regist">
                        {{ __('Regist') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
