@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/result.css') }}">
@endsection

@section('content')
<div id="result">
<p class="midasi">検索結果</p>
<div id="kensakukekka">
<span style="color:#fff; background-color: #333333;">1件</span>
</div>
</div>

<div id="boder">
<div id="hr"></div>	
</div>

<div id="shop_data">
    <p class="shopname_review">〇〇〇工房　福岡店</p><a href="#">レビューを見る</a>
	<p>〒 819-0001</p>
	<p>福岡県福岡市中央区1-2-3</p>
	<p>TEL:092-1234-5678</p>
	<p>HP<a href="#">HPアドレスが入る</a></p>
		
<img src="{{ asset('picture/shop_1.png') }}">
<p>お店の紹介文が入ります。お店の紹介文が入ります。</p>
</div>
<div id="hr"></div>	
 {{ $result->links() }}
@endsection