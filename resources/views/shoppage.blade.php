@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shoppage.css') }}">
@endsection

@section('content')

<div id="shop_data">
    <p class="shopname_review">{{$shop->name}}</p>
    <a href="#">レビューを見る</a>
    <div id="hr"></div>
<div id="shopproduct">
<p class="midasi">お店の紹介</p>
<div class="shop_picture">
    <img src="/storage/{{$shop->img1}}">
    <img src="/storage/{{$shop->img2}}">
    <img src="/storage/{{$shop->img3}}">
<p>{{$shop->detail}}</p>
</div>

</div>

<div id="hr"></div>
<p class="midasi">メニュー</p>
<div id="shopmenw">
    <div id="menwdetails">
        <ui>
     @foreach($shop->services as $service)
     {{---{{$service->item->item}}---}}
     <li><span style="width: 120px">{{$service->item->service}}</span><span>{{$service->price}}</span></li>
     @endforeach  
        </ui>
       
    
    </div>
</div>
<div id="hr"></div>
<p class="midasi">アクセス</p>
<div id="access">
<p>〒{{$shop->addressnumber}}</p>
<p>住所{{$shop->address1}}{{$shop->address2}}{{$shop->address3}}</p>
<p>TEL{{$shop->tell}}</p>
<p>HP<a href="#">{{$shop->hp}}</a></p>
</div>
</div>

@endsection