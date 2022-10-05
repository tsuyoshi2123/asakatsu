@extends('layouts.header')
@section('content')
    <div class="wrapper">
        <div class="outer">
            <div class="outer__heading">
                <p class="outer__heading__title">マップ</p>
                <p class="outer__heading__lead">テスト区テスト市テスト町<br>テストマンション1-1-1<br>テスト団地101</p>
            </div>
            <div id="list-tag">
                <example-component :ranks="{{ json_encode($ranks) }}"></example-component>
            </div>
        </div>
        <div class="area">
            <div id="date-current">
                <example-date></example-date>
            </div>
            <div class="area__list">
                @foreach($userList as $user)
                    <div class="area__list__user">
                        <img src="/image/fuji.png" alt="/" class="pic">
                        <p class="area__list__user__font name">{{ $user->name }}</p>
                        <p class="area__list__user__font comment">{{ $user->comment}}</p>
                        <p class="area__list__user__font continued">継続：{{ $user->total_continuation }}</p>
                        <p class="area__list__user__font cumulative">総計：{{ $user->total_cumulative }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection