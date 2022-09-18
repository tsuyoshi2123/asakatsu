
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/content.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('fontawesome/css/app.css') }}">
    <title>asakatsu</title>
</head>
<body>
    <div class="heade">
        <a class="heade__title" href="{{ url('/') }}">asakatsu</a>
        <div class="heade__box">
                <!-- Authentication Links -->
                @auth
                    <a href="/" class="navlink">
                        <table style="height: 30px">
                            <tr><td>継続/累計</td></tr>
                            <tr><td>10/20</td></tr>
                        </table>
                        <img src="/image/fuji.png" alt="/" class="navlink--pic">
                        <i class="fa-solid fa-caret-down navlink--triangle"></i>
                    </a>
                @else
                    @guest
                        @if (Route::has('login'))
                            <li class="navlink__item">
                                <a class="login" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="navlink__item">
                                <a class="regist" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                            {{-- other gust --}}
                    @endguest
                @endauth
        </div>
    </div>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/report.js') }}"></script>
</body>
</html>