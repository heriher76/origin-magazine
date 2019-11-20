@extends('layouts.app')

@section('title', 'Kedai Kopi | Origin Magazine Indonesia')

@section('contents')
<center><h2>Kedai Kopi</h2></center>
<hr>
@foreach($coffeeShops as $key => $coffeeShop)
<div class="col-md-12">
    <!-- Nav tabs -->
    <div class="card">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home{{$key}}" aria-controls="home" role="tab" data-toggle="tab">Profil</a></li>
        <li role="presentation"><a href="#profile{{$key}}" aria-controls="profile" role="tab" data-toggle="tab">Lokasi</a></li>
        <li role="presentation"><a href="#messages{{$key}}" aria-controls="messages" role="tab" data-toggle="tab">Kontak</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active row" id="home{{$key}}">
	        <div class="col-md-2">
	        	<img src="{{ url('coffee-shop/'.$coffeeShop->thumbnail) }}" alt="" style="max-width: 150px;">
	        </div>
	        <div class="col-md-10">
	    		<p>{!! $coffeeShop->description !!}</p>
	    	</div>
    	</div>
        <div role="tabpanel" class="tab-pane" id="profile{{$key}}">{!! $coffeeShop->address !!}</div>
        <div role="tabpanel" class="tab-pane" id="messages{{$key}}">{!! $coffeeShop->contact !!}</div>
    </div>
	</div>
</div>
@endforeach

@stop

@section('styles')
<style type="text/css">
	.nav-tabs { border-bottom: 2px solid #DDD; }
	    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
	    .nav-tabs > li > a { border: none; color: #666; }
	        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
	        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
	    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
	.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
	.tab-pane { padding: 15px 0; }
	.tab-content{padding:20px}

	.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
</style>
@stop
