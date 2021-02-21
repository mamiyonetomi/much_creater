@extends('layouts.layout')

{{-- ボタンメニュー --}}
{{--
@section('menu')
@component('components.menu')
@endcomponent
@endsection
--}}

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('content')
<div id="style1">
	<p>こんなリメイクができるお店、お直し屋さんがあったらいいのに</p>
		<p>&nbsp;</p>
</div>
<p class="style2">お気に入りだったデニムパンツをリメイクして世界に１つだけのBAGを作りたい。<br>
ちょっとパンツの裾上げだけしてほしい…</p>
	
<div id="style3">
		<p>あなたの要望にお答えできるcreaterのお店が見つかります！</p>
	</div>
	
<div id="style4">
		<p class="style4_5">＼  まずはお店検索から  ／</p>
		<p>サクッと検索</p>
		<a href="/shopsearch"><img src="picture/Shop_search.png"></a>
		<div style="clear: both;"></div>
  <img src="picture/search.png">
	</div>
	
<div id="style5">
		<p class="style4_5">＼  集荷配送サービスが利用可  ／</p>
		<p>遠方のお店でも自宅から集荷、自宅へお届けでラクラク</p>
		<img src="picture/semi-trailers.png">
	</div>
	<div id="style6">
		<p class="style4_5">＼　見積もりだけの依頼もOK　／</p>
		<p>見積もりだけでも集荷配送サービスが使用できるお店も多数！</p>
		<img src="picture/algebra-1238600_1920.png">
	</div>

    <div id="style7">
		<a href="/shopsearch"><img src="picture/click.png"></a>
	</div>

@endsection
