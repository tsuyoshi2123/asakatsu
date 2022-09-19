@extends('layouts.header')
@section('content')
    <div class="wrapper">
        <div class="outer">
            <div class="outer__heading">
                <p class="outer__heading__title">マップ</p>
                <p class="outer__heading__lead">テスト区テスト市テスト町<br>テストマンション1-1-1<br>テスト団地101</p>
            </div>
            <div id="list-tag">
                <example-component></example-component>
            </div>
        </div>
        <div class="area">
            <div id="date-current">
                <example-date></example-date>
            </div>
            <div class="area__list">
                @for ($i = 0; $i < 5; $i++)
                    <div class="area__list__user">
                        <img src="/image/fuji.png" alt="/" class="pic">
                        <p class="area__list__user__font name">hoge太郎</p>
                        <p class="area__list__user__font comment">hogeレビュー</p>
                        <p class="area__list__user__font continued">継続：10</p>
                        <p class="area__list__user__font cumulative">累計：20</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection