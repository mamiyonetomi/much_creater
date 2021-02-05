@extends('layouts.layout')

{{-- ボタンメニュー --}}
@section('menu')
@component('components.menu')
@endcomponent
@endsection


@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_search.css') }}">

@endsection

<!-- Scripts -->
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/shop_search.js') }}"></script>
@endsection


@section('content')

<p class="items">アイテム別メニュー</p>
<div id="itemsmenw">
    <select id="searchbox" onchange="search();">
        <option value="shatsu">洋服</option>
        <option value="kimono">着物</option>
        <option value="suit">スーツ・制服</option>
        <option value="zakka">雑貨(靴・バッグなど)</option>
    </select>
    <!-- 洋服用 -->
    <div id="shatsuArea">
        <div class="menwnoproduct">
            <label><input id="shiteinai1" onclick="clkShiteki(1);" type="checkbox" >指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
        </div>
        <div class="menwproduct">
            <p class="products">※複数選択可</p>
            <label><input type="checkbox" class="service1">裾の丈詰め</label>
            <label><input type="checkbox" class="service1">ボタン交換</label>
            <label><input type="checkbox" class="service1">ボタンホールの作成</label>
            <label><input type="checkbox" class="service1">防ダニ加工</label>
            <label><input type="checkbox" class="service1">穴・虫食いの修復</label>
            <label><input type="checkbox" class="service1">撥水加工</label>
            <label><input type="checkbox" class="service1">寸法のつぎ足し</label>
            <label><input type="checkbox" class="service1">染色</label>
            <label><input type="checkbox" class="service1">リメイク（別の物に作り替え）</label>
            <label><input type="checkbox" class="service1">ファスナー修理</label>
            <label><input type="checkbox" class="service1">ネーム刺繍</label>
            <label><input type="checkbox" class="service1">絵柄刺繍</label>
            <label><input type="checkbox" class="service1">すり切れ・ほころび補修</label>
        </div>
    </div>
    <!-- 着物 -->
    <div id="kimonoArea" class="nonSelect">
        <div class="menwnoproduct">
            <label><input id="shiteinai2" onclick="clkShiteki(2);" type="checkbox" >指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
        </div> 
        <div class="menwproduct">
            <p class="products">※複数選択可</p>
            <label><input type="checkbox" class="service2">丸洗い</label>
            <label><input type="checkbox" class="service2">寸法直し</label>
            <label><input type="checkbox" class="service2">染め</label>
            <label><input type="checkbox" class="service2">染色補正</label>
            <label><input type="checkbox" class="service2">裏地交換</label>
            <label><input type="checkbox" class="service2">湯のし</label>
            <label><input type="checkbox" class="service2">防水加工</label>
            <label><input type="checkbox" class="service2">仕立て</label>
            <label><input type="checkbox" class="service2">リメイク（別の物に作り替え）</label>
            <label><input type="checkbox" class="service2">すり切れ・ほころび補修</label>
        </div>
    </div>
    <!-- スーツ・制服 -->
    <div id="suitArea" class="nonSelect">
        <div class="menwnoproduct">
            <label><input id="shiteinai3" onclick="clkShiteki(3);" type="checkbox" >指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
        </div> 
        <div class="menwproduct">
            <p class="products">※複数選択可</p>
            <label><input type="checkbox" class="service3">裾の丈詰め</label>
            <label><input type="checkbox" class="service3">ボタン交換</label>
            <label><input type="checkbox" class="service3">ボタンホールの作成</label>
            <label><input type="checkbox" class="service3">防ダニ加工</label>
            <label><input type="checkbox" class="service3">穴・虫食いの修復</label>
            <label><input type="checkbox" class="service3">撥水加工</label>
            <label><input type="checkbox" class="service3">寸法のつぎ足し</label>
            <label><input type="checkbox" class="service3">染色</label>
            <label><input type="checkbox" class="service3">リメイク（別の物に作り替え）</label>
            <label><input type="checkbox" class="service3">ファスナー修理</label>
            <label><input type="checkbox" class="service3">ネーム刺繍</label>
            <label><input type="checkbox" class="service3">絵柄刺繍</label>
            <label><input type="checkbox" class="service3">裏地交換</label>
            <label><input type="checkbox" class="service3">すり切れ・ほころび補修</label>
        </div>
    </div>
    <!-- 雑貨(靴・バッグなど) -->
    <div id="zakkaArea" class="nonSelect">
        <div class="menwnoproduct">
            <label><input id="shiteinai4" onclick="clkShiteki(4);" type="checkbox" >指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
        </div> 
        <div class="menwproduct">
            <p class="products">※複数選択可</p>
            <label><input type="checkbox" class="service4">ボタン交換</label>
            <label><input type="checkbox" class="service4">バックル交換</label>
            <label><input type="checkbox" class="service4">防ダニ加工</label>
            <label><input type="checkbox" class="service4">穴・虫食いの修復</label>
            <label><input type="checkbox" class="service4">撥水加工</label>
            <label><input type="checkbox" class="service4">染色</label>
            <label><input type="checkbox" class="service4">リメイク（別の物に作り替え）</label>
            <label><input type="checkbox" class="service4">ファスナー修理</label>
            <label><input type="checkbox" class="service4">ネーム刺繍</label>
            <label><input type="checkbox" class="service4">絵柄刺繍</label>
            <label><input type="checkbox" class="service4">裏地交換</label>
            <label><input type="checkbox" class="service4">塗装剝げ補修</label>
        </div>
    </div>
</div>

<p class="items">素材選択</p>
<div id="materials">
        <div class="menwnoproduct">
        <label><input id="shiteinai5" onclick="clkShiteki(5);" type="checkbox" >指定なし(下記メニューに該当しない場合は指定しないを選択)</label>
        </div>
        <div style="clear: both;"></div>
        <div class="menwproduct">
        <p class="products">※複数選択可</p>
        <label><input type="checkbox" class="service5">合皮・本革</label>
        <label><input type="checkbox" class="service5">毛皮</label>
        <label><input type="checkbox" class="service5">ニット（編地）</label>
        <label><input type="checkbox" class="service5">ビニル素材</label>
        </div>
        </div>

        <p class="items">都道府県選択</p>
        <div id="city">
            <div style="clear: both;"></div>
            <div class="test">
                都道府県：
                <select id="todofuken" onchange="selectTodofuken();">
                <option value="01">北海道</option>
                <option value="02">青森県</option>
                <option value="03">岩手県</option>
                <option value="04">宮城県</option>
                <option value="05">秋田県</option>
                <option value="06">山形県</option>
                <option value="07">福島県</option>
                <option value="08">茨城県</option>
                <option value="09">栃木県</option>
                <option value="10">群馬県</option>
                <option value="11">埼玉県</option>
                <option value="12">千葉県</option>
                <option value="13">東京都</option>
                <option value="14">神奈川県</option>
                <option value="15">新潟県</option>
                <option value="16">富山県</option>
                <option value="17">石川県</option>
                <option value="18">福井県</option>
                <option value="19">山梨県</option>
                <option value="20">長野県</option>
                <option value="21">岐阜県</option>
                <option value="22">静岡県</option>
                <option value="23">愛知県</option>
                <option value="24">三重県</option>
                <option value="25">滋賀県</option>
                <option value="26">京都府</option>
                <option value="27">大阪府</option>
                <option value="28">兵庫県</option>
                <option value="29">奈良県</option>
                <option value="30">和歌山県</option>
                <option value="31">鳥取県</option>
                <option value="32">島根県</option>
                <option value="33">岡山県</option>
                <option value="34">広島県</option>
                <option value="35">山口県</option>
                <option value="36">徳島県</option>
                <option value="37">香川県</option>
                <option value="38">愛媛県</option>
                <option value="39">高知県</option>
                <option value="40">福岡県</option>
                <option value="41">佐賀県</option>
                <option value="42">長崎県</option>
                <option value="43">熊本県</option>
                <option value="44">大分県</option>
                <option value="45">宮崎県</option>
                <option value="46">鹿児島県</option>
                <option value="47">沖縄県</option>
            </select> 

            市区町村：
                <select id="shikuchoson">
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
            <button>検索する</button>
            </div>

    @endsection