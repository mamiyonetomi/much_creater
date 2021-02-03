<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>much_creater</title>
    {{-- mach_create_stylesheet.css --}}
    @yield('css')
    <link rel="stylesheet" href="{{ asset('mach_create_stylesheet.css') }}">
    <style type="text/css">
        @media (max-width: 768px) {}
    </style>
</head>

<body>

    <div id="header">
        <a href="much_create.html"><img src="{{ asset('picture/much_creater.png') }}"></a>
        <p class="subtitle">お直しリメイク店を探せて集荷配送サービスも充実！</p>
    </div>

    <div id="member">
        <a href="#">会員登録</a>
        <a href="#">ログイン</a>
        <a href="#">お気に入りShop</a>
    </div>

    @yield('menu')
    
    {{--
    メニューを呼び出すとき以下を記入 
    @component('components.menu')
    @endcomponent
     --}}
     
    {{-- 共通ヘッダーここまで --}}
    {{-- コンテンツ --}}
    @yield('content')

    @yield('js')
</body>

</html>