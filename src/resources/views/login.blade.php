@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('title','log.blade.php')

@section('content')
<form action="" method="post">
    @csrf
    <div class="">
    <div class="">
        <h2 class="">ログイン</h2>
    </div>
    <form class="">
        <div class="">
            <div class="">
                <span class="">メールアドレス</span>
            </div>
            <div class="">
                <div class="">
                    <input type="text" name="email">
                </div>
                <div class="">
                    <!--バリデーション？-->
                </div>
            </div>
        </div>
        <div class="">
            <div class="">
                <span class="">パスワード</span>
            </div>
            <div class="">
                <div class="">
                    <input type="text" name="password">
                </div>
                <div class="">
                    <!--バリデーション？-->
                </div>
            </div>
        </div>
        <div class="">
            <button class=""
            type="submit">ログインする</button>
        </div>
        <div class="">
            <a href="{{}">会員登録はこちら</a>
        </div>
    </form>
</div>
</form>
