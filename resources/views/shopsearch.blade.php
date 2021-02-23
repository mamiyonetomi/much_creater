@extends('layouts.layout')

{{-- ボタンメニュー 
@section('menu')
@component('components.menu')
@endcomponent
@endsection
--}}


@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_search.css') }}">

@endsection

<!-- Scripts -->
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/shop_search.js') }}"></script>
@endsection


@section('content')
<form action="/result" method="GET">
<p class="items">アイテム別メニュー</p>
<div id="itemsmenw">
    <select id="searchbox" onchange="search();" name="item">
        @foreach ($items->groupBy(['item_no', 'item']) as $key => $value)
        <option value="{{$key}}">{{$value->keys()->first()}}</option>
        @endforeach
    </select>

    @foreach ($items->groupBy('item_no') as $key => $value)
    <div id="area{{$key}}" class="area" data-key="{{$key}}">
        <div class="menwnoproduct">
            <label><input id="shiteinai{{$key}}" onclick="clkShiteki({{$key}});" type="checkbox" name="all">指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
            <div class="menwproduct">
                <p class="products">※複数選択可</p>
                <div class="services">
                    @foreach ($value as $item)
                    <label><input type="checkbox" class="service{{$key}}" value="{{$item->id}}" name="service[]">{{$item->service}}</label>                
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<p class="items">素材選択</p>
<div id="materials">
    <div class="menwnoproduct">
    <label><input id="shiteinai5" onclick="clkShiteki(5);" type="checkbox" >指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
    </div>
    <div style="clear: both;"></div>
    <div class="menwproduct">
    <p class="products">※複数選択可</p>
    <label><input type="checkbox" class="service5" name="kawa">合皮・本革</label>
    <label><input type="checkbox" class="service5" name="kegawa">毛皮</label>
    <label><input type="checkbox" class="service5" name="nitto">ニット（編地）</label>
    <label><input type="checkbox" class="service5" name="biniru">ビニル素材</label>
    </div>
</div>

<p class="items">都道府県選択</p>
<div id="city">
    <div style="clear: both;"></div>
    <div class="test">
        都道府県：
        <select id="todofuken" onchange="selectTodofuken();" name="address1">
        <option value="北海道" data-perfcode="01">北海道</option>
        <option value="青森県" data-perfcode="02">青森県</option>
        <option value="岩手県" data-perfcode="03">岩手県</option>
        <option value="宮城県" data-perfcode="04">宮城県</option>
        <option value="秋田県" data-perfcode="05">秋田県</option>
        <option value="山形県" data-perfcode="06">山形県</option>
        <option value="福島県" data-perfcode="07">福島県</option>
        <option value="茨城県" data-perfcode="08">茨城県</option>
        <option value="栃木県" data-perfcode="09">栃木県</option>
        <option value="群馬県" data-perfcode="10">群馬県</option>
        <option value="埼玉県" data-perfcode="11">埼玉県</option>
        <option value="千葉県" data-perfcode="12">千葉県</option>
        <option value="東京都" data-perfcode="13">東京都</option>
        <option value="神奈川県" data-perfcode="14">神奈川県</option>
        <option value="新潟県" data-perfcode="15">新潟県</option>
        <option value="富山県" data-perfcode="16">富山県</option>
        <option value="石川県" data-perfcode="17">石川県</option>
        <option value="福井県" data-perfcode="18">福井県</option>
        <option value="山梨県" data-perfcode="19">山梨県</option>
        <option value="長野県" data-perfcode="20">長野県</option>
        <option value="岐阜県" data-perfcode="21">岐阜県</option>
        <option value="静岡県" data-perfcode="22">静岡県</option>
        <option value="愛知県" data-perfcode="23">愛知県</option>
        <option value="三重県" data-perfcode="24">三重県</option>
        <option value="滋賀県" data-perfcode="25">滋賀県</option>
        <option value="京都府" data-perfcode="26">京都府</option>
        <option value="大阪府" data-perfcode="27">大阪府</option>
        <option value="兵庫県" data-perfcode="28">兵庫県</option>
        <option value="奈良県" data-perfcode="29">奈良県</option>
        <option value="和歌山県" data-perfcode="30">和歌山県</option>
        <option value="鳥取県" data-perfcode="31">鳥取県</option>
        <option value="島根県" data-perfcode="32">島根県</option>
        <option value="岡山県" data-perfcode="33">岡山県</option>
        <option value="広島県" data-perfcode="34">広島県</option>
        <option value="山口県" data-perfcode="35">山口県</option>
        <option value="徳島県" data-perfcode="36">徳島県</option>
        <option value="香川県" data-perfcode="37">香川県</option>
        <option value="愛媛県" data-perfcode="38">愛媛県</option>
        <option value="高知県" data-perfcode="39">高知県</option>
        <option value="福岡県" data-perfcode="40">福岡県</option>
        <option value="佐賀県" data-perfcode="41">佐賀県</option>
        <option value="長崎県" data-perfcode="42">長崎県</option>
        <option value="熊本県" data-perfcode="43">熊本県</option>
        <option value="大分県" data-perfcode="44">大分県</option>
        <option value="宮崎県" data-perfcode="45">宮崎県</option>
        <option value="鹿児島県" data-perfcode="46">鹿児島県</option>
        <option value="沖縄県" data-perfcode="47">沖縄県</option>
    </select> 

    市区町村：
    <select id="shikuchoson" name="address2">
    </select>
    </div>
</div>
    
<p class="items">その他指定</p>
<div id="another">    
    <div class="menwproduct">
    <p class="products">※複数選択可</p>
    <label><input type="checkbox" class="service">集荷配送サービス利用可能店舗</label>
    <label><input type="checkbox" class="service">見積もりのみの依頼がOKな店舗</label>
    </div>
</div>
    
<div id="button">
    <input type="submit" value="検索する">
</div>
</form>
@endsection