@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/result.css') }}">
@endsection

@section('content')
<div id="result">
<p class="midasi">検索結果</p>
<div id="kensakukekka">
<span style="color:#fff; background-color: #333333;">{{ $shops->total()}}件</span>

</div>
</div>

<div id="boder">
<div id="hr"></div>	
</div>

@foreach ($shops as $shop)
<div id="shop_data">
    <p class="shopname_review">{{$shop->name}}</p><a href="#">レビューを見る</a>
	<p>{{$shop->addressnumber}}</p>
	<p>{{$shop->address1}}{{$shop->address2}}{{$shop->address3}}</p>
	<p>TEL:{{$shop->tell}}</p>
	<p>HP<a href="#">{{$shop->hp}}</a></p>
		
<img src="/storage/{{$shop->img1}}">
<p>{{Str::limit($shop->detail, 60, '(…)' )}}</p>
</div>
<div id="hr"></div>	
@endforeach

	
 {{ $shops->links() }}
@endsection