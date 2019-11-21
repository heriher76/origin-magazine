@extends('layouts.app')

@section('title', 'Home | Origin Magazine Indonesia')

@section('contents')
<div class="col-md-8 col-sm-12 col-xs-12">
	<div class="owl-carousel owl-theme slide" id="featured">
		@foreach($sliders as $key => $slider)
		<div class="item @if($key == 0) active @endif">
			<article class="featured">
				<div class="overlay"></div>
				<figure>
					<img src="{{ url('berita/'.$slider->thumbnail) }}" alt="">
				</figure>
				<div class="details">
					<h1><a href="{{ url('/'.$slider->slug) }}">{{ $slider->title }}</a></h1>
					<div class="time">{{ $slider->updated_at->formatLocalized('%A, %d %B %Y') }}</div>
				</div>
			</article>
		</div>
		@endforeach
	</div>

	<div class="line">
		<div>Berita Terbaru</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				@foreach($latestNews as $latest)
				<article class="article col-md-6">
					<div class="inner">
						<figure>
							<a href="{{ url($latest->slug) }}">
								<img src="{{ url('berita/'.$latest->thumbnail) }}" alt="">
							</a>
						</figure>
						<div class="padding">
							<div class="detail">
								<div class="time">{{ $latest->updated_at->formatLocalized('%A, %d %B %Y') }}</div>
							</div>
							<h2><a href="{{ url($latest->slug) }}">{{ $latest->title }}</a></h2>
							<p>{!! str_limit(strip_tags($latest->description), $limit = 90, $end = '...') !!}</p>
							<footer>
								<a class="btn btn-primary more" href="{{ url($latest->slug) }}">
									<div>Lanjut Baca</div>
									<div><i class="ion-ios-arrow-thin-right"></i></div>
								</a>
							</footer>
						</div>
					</div>
				</article>
				@endforeach
			</div>
		</div>
	</div>
	
	<div class="line">
		<div>Berita Lainnya</div>
	</div>
	<div class="row">
		@foreach($otherNews as $other)
		<article class="col-md-12 article-list">
			<div class="inner">
				<figure>
					<a href="{{ url($other->slug) }}">
						<img src="{{ url('berita/'.$other->thumbnail) }}" alt="">
					</a>
				</figure>
				<div class="details">
					<div class="detail">
						<div class="time">{{ $other->updated_at->formatLocalized('%A, %d %B %Y') }}</div>
					</div>
					<h1><a href="{{ url($other->slug) }}">{{ $other->title }}</a></h1>
					<p>
					{!! str_limit(strip_tags($other->description), $limit = 90, $end = '...') !!}
					</p>
					<footer>
						<a class="btn btn-primary more" href="{{ url($other->slug) }}">
							<div>Lanjut Baca</div>
							<div><i class="ion-ios-arrow-thin-right"></i></div>
						</a>
					</footer>
				</div>
			</div>
		</article>
		@endforeach
	</div>
</div>
<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
	
	<aside>
		<h1 class="aside-title">Promosi <a href="{{ url('/promotion') }}" class="all">Lihat Semua <i class="ion-ios-arrow-right"></i></a></h1>
		<div class="aside-body">
			@foreach($promotions as $promotion)
			<article class="article-mini">
				<div class="inner">
					<figure>
						<a href="{{ url('promotions/') }}">
							<img src="{{ url('promotion/'.$promotion->thumbnail) }}" alt="">
						</a>
					</figure>
					<div class="padding">
						<h1><a href="{{ url('promotions/') }}">{{ $promotion->title }}</a></h1>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</aside>

	<aside>
	
		<h1 class="title-col">
			Events
			<div class="carousel-nav" id="hot-news-nav">
				<div class="prev">
					<i class="ion-ios-arrow-left"></i>
				</div>
				<div class="next">
					<i class="ion-ios-arrow-right"></i>
				</div>
			</div>
		</h1>
		<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
			@foreach($events as $event)
			<article class="article-mini">
				<div class="inner">
					<figure>
						<a href="{{ url('event/'.$event->slug) }}">
							<img src="{{ url('event/'.$event->thumbnail) }}" alt="">
						</a>
					</figure>
					<div class="padding">
						<h1><a href="{{ url('event/'.$event->slug) }}">{{ $event->title }}</a></h1>
						<div class="detail">
							<div class="time">{{ $event->created_at->formatLocalized('%A, %d %B %Y') }}</div>
						</div>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</aside>
</div>
@stop

@section('top-footer')
<section class="best-of-the-week">
	<div class="container">
		<h1><div class="text">Kolom Opini</div>
			<div class="carousel-nav" id="best-of-the-week-nav">
				<div class="prev">
					<i class="ion-ios-arrow-left"></i>
				</div>
				<div class="next">
					<i class="ion-ios-arrow-right"></i>
				</div>
			</div>
		</h1>
		<div class="owl-carousel owl-theme carousel-1">
			@foreach($opinions as $opinion)
			<article class="article">
				<div class="inner">
					<div class="padding">
						<div class="detail">
							<div class="time">{{ $opinion->updated_at->formatLocalized('%A, %d %B %Y') }}</div>
						</div>
						<h2><a href="{{ url('opinions') }}">{{ $opinion->title }}</a></h2>
						<p>{!! str_limit(strip_tags($opinion->description), $limit = 90, $end = '...') !!}</p>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</div>
</section>
@stop