@extends('layouts.app')

@section('title', $event->title.' | Origin Magazine Indonesia')

@section('contents')
<div class="col-md-4 sidebar" id="sidebar">
	<aside>
		<h1 class="aside-title">Event Lain</h1>
		<div class="aside-body">
			@foreach($otherEvents as $other)
		    <article class="article-mini">
		      <div class="inner">
		      <figure>
		          <a href="{{ url('/'.$other->slug) }}">
		            <img src="{{ url('berita/'.$other->thumbnail) }}">
		        </a>
		      </figure>
		      <div class="padding">
		        <h1><a href="{{ url('/'.$other->slug) }}">{{ $other->title }}</a></h1>
		        <div class="time">{{ $other->created_at->formatLocalized('%A, %d %B %Y') }}</div>
		      </div>
		      </div>
		    </article>
			@endforeach
		</div>
	</aside>
</div>
<div class="col-md-8">
	<ol class="breadcrumb">
	  <li><a href="{{ url('/event') }}">Berita</a></li>
	  <li class="active">Detail</li>
	</ol>
	<article class="article main-article">
		<header>
			<h1>{{ $event->title }}</h1>
			<ul class="details">
				<li>Posted on {{ $event->updated_at->formatLocalized('%A, %d %B %Y') }}</li>
				<li>Oleh <a href="#">Admin</a></li>
			</ul>
		</header>
		<div class="main">
			<p>{!! $event->description !!}</p>
		</div>
	</article>
	<div id="disqus_thread"></div>
</div>
@stop