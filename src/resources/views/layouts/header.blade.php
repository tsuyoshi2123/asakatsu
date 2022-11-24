
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('fontawesome/css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <title>asakatsu</title>
</head>
<body>
    <div class="heade">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            <button class="heade__title">asakatsu</button>
            @csrf
        </form>
        <div class="heade__box">
            <!-- Authentication Links -->
            @auth
                <a href="/" class="navlink">
                    <table style="height: 30px">
                        <tr><td>継続/総計</td></tr>
                        <tr><td>{{ $loginUser->total_continuation . '/' . $loginUser->total_cumulative }}</td></tr>
                    </table>
                    <img src="storage/avatar/fuji.png" alt="/" class="navlink--pic">
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