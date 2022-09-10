
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/content.css">
    <link type="text/css" rel="stylesheet" href="{{ mix('fontawesome/css/app.css') }}">
    <title>asakatsu</title>
</head>
<body>
    <div class="heade">
        <p class="heade__title">asakatsu</p>
        <div class="heade__box">
            <table style="height: 30px">
                <tr><td>継続/累計</td></tr>
                <tr><td>10/20</td></tr>
            </table>
            <img src="/image/fuji.png" alt="/" class="heade__box--pic">
            <i class="fa-solid fa-caret-down heade__box--triangle"></i>
        </div>
    </div>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>