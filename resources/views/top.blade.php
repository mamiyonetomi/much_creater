@extends('layouts.layout')

{{-- ボタンメニュー --}}
@section('menu')
@component('components.menu')
@endcomponent
@endsection

@section('content')
<div id="mainpicture">
    <img src="{{ asset('picture/mainpicture.png') }}">
</div>
<div id="container">
    <div id="denim">
        <p>コレクションしていた<br>特殊染めデニムのパンツたち</p>
        <img src="{{ asset('picture/denim.png') }}">
    </div>
    <div id="bag">
        <img src="{{ asset('picture/bag.png')}}">
        <p>　使い古していい色落ち感が気に入って<br>いたのに破れてしまった皮鞄</p>

    </div>
</div>

<div id="explanation">
    <p class="reuse">大切なお品もの、あなただけのオリジナルアイテムに<br>リメイクしてリユースしませんか？</p>
    <p class="introduct">ボトムの裾上げから特殊なファッションアイテムの<br>リメイクまで用途に合うリメイク店を紹介します</p>
</div>

<div id="footer">
    <p>お直し・リメイクのお店探しはこちらから</p>
    <a href="#"><img src="{{ asset('picture/shopsearch.png')}}"></a>
</div>

@endsection
