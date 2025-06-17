<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flea-market</flea-market></title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="header__logo" href="/">
                    <img src="" alt="">
                </a>
            </div>
            <a class="header__logo" href="/">
                <img class="header__img" src="/src/public/images/logo.svg" alt="ロゴ">
            </a>
            <div class="header__search">
                <input class="header-search__item-input" type="text" placeholder="なにをお探しですか？"/>
            </div>
            <div class="header__logout">
                <form method="POST" action="">
                    @csrf
                    <a href="{{ route('login') }}" class="header__logout--btn">ログイン</a>
                </form>
            </div>
            <div class="header__mypage">
                <a href="" class="header__mypage--btn">マイページ</a>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>