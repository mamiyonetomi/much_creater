@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shoppage.css') }}">
@endsection

@section('content')

<div id="shop_data">
    <p class="shopname_review">お店の名前が入る</p>
    <a href="#">レビューを見る</a>
    <div id="hr"></div>
<div id="shopproduct">
<p class="midasi">お店の紹介</p>
<div class="shop_picture">
<img src="{{ asset('picture/shop_1.png') }}">
<p>ここにお店の紹介文面が入ります。</p>
<p>お店のリメイク・お直し作品はこちら</p>
    <a href="shop_data.html"><img src="{{ asset('picture/re_design_album.png') }}"></a>
</div>

</div>

<div id="hr"></div>
<p class="midasi">メニュー</p>
<div id="shopmenw">
    <div id="menwdetails">
    <ui>
       <li>メニュー名1</li>
        <li>メニュー名2</li>
        <li>メニュー名3</li>
        <li>メニュー名4</li>
        <li>メニュー名5</li>
        <li>メニュー名6</li>
        <li>メニュー名7</li>
        <li>メニュー名8</li>
        
        
    </ui>
    </div>
    <div id="menwprice">
    <ui>
       <li>値段1</li>
        <li>値段2</li>
        <li>値段3</li>
        <li>値段4</li>
        <li>値段5</li>
        <li>値段6</li>
        <li>値段7</li>
        <li>値段8</li>
    </ui>
    </div>
</div>
<div id="hr"></div>
<p class="midasi">アクセス</p>
<div id="access">
<p>〒</p>
<p>住所</p>
<p>TEL</p>
<p>HP<a href="#">HPアドレスが入る</a></p>
    
<p class="midasi">店舗へお問合せはこちら</p>
<a href="#">問い合わせる</a>
</div>
</div>

@endsection