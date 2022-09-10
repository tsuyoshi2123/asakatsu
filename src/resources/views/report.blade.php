@extends('header')
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
            <p class="area__time">2022 09/05 12:24:15</p>
            <div class="area__list">
                <div class="area__list__user">
                    <img src="/image/fuji.png" alt="/" class="pic">
                    <p class="area__list__user__font name">hoge太郎</p>
                    <p class="area__list__user__font comment">hogeレビュー</p>
                    <p class="area__list__user__font continued">継続：10</p>
                    <p class="area__list__user__font cumulative">累計：20</p>
                </div>
            </div>
        </div>
    </div>
@endsection