@extends('layouts.layout')

{{-- ボタンメニュー --}}
@section('menu')
@component('components.menu')
@endcomponent
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_list.css') }}">
@endsection
@section('content')
<p>お直し＆リメイクSHOP一覧</p>

<div id="shoplist">
<p class="city">東京都</p>
    <p><a href="#">うえの工房　上野店</a></p>
    <p><a href="#">making cloth 新宿店</a></p>

    <p class="city">大阪府</p>
    <p><a href="#">なにわ　難波店</a></p>
    <p><a href="#">making cloth 梅田店</a></p>


<p class="city">福岡</p>
<p><a href="#">あいおえお工房　福岡店</a></p>
<p><a href="#">いろはにほへと　天神店</a></p>

</div>

@endsection