@extends('layouts.layout')

{{-- ボタンメニュー --}}
@section('menu')
@component('components.menu')
@endcomponent
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/itemintroduction.css') }}">
@endsection
@section('content')
<p class="creater_pic_up">Creater Pic UP!!</p>

<div id="hr"></div>
<div id="denim_heading">
<a>様々な色合いのデニムパンツ10着からオリジナルBAGを制作</a>
<a href="#">うえの工房　上野店</a>
</div>

<div id="denim">
        <img src="{{ asset('picture/denim_before.after.png') }}">
    <div id="denim_explanation">
    <p>ここに作品紹介文を入れる。ここに作品紹介文を入れる。ここに作品紹介文を入れる。<br>ここに作品紹介文を入れる。ここに作品紹介文を入れる。ここに作品紹介文を入れる。<br>ここに作品紹介文を入れる。ここに作品紹介文を入れる。ここに作品紹介文を入れる。</p>
    </div>
</div>

<div style="clear: both;"></div>
    <div id="hr"></div>
<div id="bag_heading">
<a>使い古して思い出の詰まった革鞄がキーケースに生まれ変わりました</a>
<a href="#">making cloth 新宿店</a>
</div>

<div id="bag">
        <img src="{{ asset('picture/bag_before.after.png') }}">
   <div id="bag_explanation">
   <p>ここに作品紹介文を入れる。ここに作品紹介文を入れる。ここに作品紹介文を入れる。<br>ここに作品紹介文を入れる。ここに作品紹介文を入れる。ここに作品紹介文を入れる。<br>ここに作品紹介文を入れる。ここに作品紹介文を入れる。ここに作品紹介文を入れる。</p>
    </div>
</div>

@endsection